<?php
require_once __DIR__ . '/FileHandler.php';
require_once __DIR__ . '/CodeReader.php';
require_once __DIR__ . '/OpenAIClient.php';

class Facade {
    public static function processCode(string $filePath): string {
        $handler = new FileHandler();
        $fileList = $handler->extractAndListFiles($filePath);

        $reader = new CodeReader();
        $fullCode = $reader->readAll($fileList);

        $ai = new OpenAIClient();
        return $ai->analyzeCode($fullCode);
    }
}
