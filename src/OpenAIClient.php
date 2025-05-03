<?php

require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use Dotenv\Dotenv;

class OpenAIClient {
    private $client;
    private $apiKey;

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        $this->apiKey = $_ENV['OPENAI_API_KEY'];

        $this->client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ]
        ]);
    }

    public function analyzeCode(string $code): string {
        $response = $this->client->post('chat/completions', [
            'json' => [
                'model' => 'gpt-4',
                'messages' => [
                    ['role' => 'system', 'content' => 'Eres un experto en análisis de código.'],
                    ['role' => 'user', 'content' => "Explica de qué trata este código:\n\n" . substr($code, 0, 6000)]
                ]
            ]
        ]);

        $body = json_decode($response->getBody(), true);
        return $body['choices'][0]['message']['content'] ?? 'Sin respuesta de OpenAI';
    }
}
