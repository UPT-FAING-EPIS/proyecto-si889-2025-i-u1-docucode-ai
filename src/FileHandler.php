<?php
class FileHandler {

    /**
     * Descomprime el ZIP en una carpeta temporal y devuelve un arreglo
     * con rutas absolutas a todos los archivos .php encontrados.
     *
     * @param string $zipPath  Ruta al archivo ZIP (por ejemplo "uploads/miProyecto.zip").
     * @return string[]        Array de rutas completas a cada archivo PHP extraído.
     */
    public function extractAndListFiles(string $zipPath): array
    {
        $zip = new ZipArchive;
        $res = $zip->open($zipPath);
        if ($res !== true) {
            die("Error: No se pudo abrir el ZIP: $zipPath");
        }

        // 1) Creamos una carpeta temporal única
        $tempDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . uniqid('docucode_');
        if (!mkdir($tempDir, 0755, true) && !is_dir($tempDir)) {
            die("Error: No se pudo crear la carpeta temporal $tempDir");
        }

        // 2) Extraemos TODO el contenido del ZIP en esa carpeta
        $zip->extractTo($tempDir);
        $zip->close();

        // 3) Recorremos recursivamente esa carpeta y guardamos sólo los archivos .php
        $phpFiles = [];
        $it = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($tempDir, FilesystemIterator::SKIP_DOTS)
        );
        foreach ($it as $file) {
            if ($file->isFile()) {
                // Extensión en minúsculas
                $ext = strtolower(pathinfo($file->getFilename(), PATHINFO_EXTENSION));
                if ($ext === 'php') {
                    $phpFiles[] = $file->getRealPath();
                }
            }
        }

        return $phpFiles;
    }
}
