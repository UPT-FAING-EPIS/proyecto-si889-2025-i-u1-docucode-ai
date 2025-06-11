<?php
require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use Dotenv\Dotenv;

class OpenAIClient {
    private Client $client;

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        $this->client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers'  => [
                'Authorization' => 'Bearer ' . $_ENV['OPENAI_API_KEY'],
                'Content-Type'  => 'application/json',
            ]
        ]);
    }

    /**
     * Llamada genérica a /chat/completions
     * @param array $messages  Lista de mensajes [{role, content}, …]
     * @return string          Texto de la primera elección
     */
    public function chat(array $messages): string {
        $resp = $this->client->post('chat/completions', [
            'json' => [
                'model'      => 'gpt-4',
                'messages'   => $messages,
                'max_tokens' => 2000
            ]
        ]);
        $data = json_decode($resp->getBody()->getContents(), true);
        return $data['choices'][0]['message']['content'] ?? '';
    }

    /**
     * Análisis básico de código
     */
    public function analyzeCode(string $code): string {
        $response = $this->client->post('chat/completions', [
            'json' => [
                'model'    => 'gpt-4',
                'messages' => [
                    ['role'=>'system','content'=>'Eres un experto en análisis de código.'],
                    ['role'=>'user',  'content'=>"Explica de qué trata este código:\n\n".substr($code,0,6000)]
                ]
            ]
        ]);
        $body = json_decode($response->getBody()->getContents(), true);
        return $body['choices'][0]['message']['content'] ?? 'Sin respuesta de OpenAI';
    }

    /**
     * Evaluación de calidad de código
     */
    public function evaluarCalidadCodigo(string $code): string {
        $prompt = "Evalúa este código PHP con puntuación del 1 al 10 y justifica según buenas prácticas:\n\n";
        $input  = substr($prompt . $code, 0, 6000);

        $resp = $this->client->post('chat/completions', [
            'json'=>[
                'model'=>'gpt-4',
                'messages'=>[
                    ['role'=>'system','content'=>'Eres un experto en buenas prácticas de programación.'],
                    ['role'=>'user','content'=>$input]
                ]
            ]
        ]);
        $data = json_decode($resp->getBody()->getContents(), true);
        return $data['choices'][0]['message']['content'] ?? 'Sin respuesta de OpenAI';
    }
}
