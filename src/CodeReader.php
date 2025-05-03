<?php

class CodeReader {
    public function readAll(array $filePaths): string {
        $code = "";
        foreach ($filePaths as $file) {
            $content = file_get_contents($file);
            $code .= "\n// Archivo: " . basename($file) . "\n";
            $code .= $content . "\n";
        }
        return $code;
    }
}
