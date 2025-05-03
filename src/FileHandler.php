<?php

class FileHandler {
    public function extractAndListFiles(string $filePath): array {
        $ext = pathinfo($filePath, PATHINFO_EXTENSION);
        $outputDir = dirname($filePath) . '/' . pathinfo($filePath, PATHINFO_FILENAME);

        if (!file_exists($outputDir)) {
            mkdir($outputDir, 0777, true);
        }

        if ($ext === 'zip') {
            $zip = new ZipArchive();
            if ($zip->open($filePath) === TRUE) {
                $zip->extractTo($outputDir);
                $zip->close();
            } else {
                throw new Exception("No se pudo abrir el archivo ZIP.");
            }
        } else {
            // archivo suelto .php, .py, etc.
            copy($filePath, $outputDir . '/' . basename($filePath));
        }

        // Obtener todos los archivos de código permitidos
        $allowedExtensions = ['php', 'py', 'js', 'java'];
        $codeFiles = [];

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($outputDir)
        );

        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                if (in_array($ext, $allowedExtensions)) {
                    $codeFiles[] = $file->getPathname();
                }
            }
        }

        return $codeFiles;
    }
}
