<?php

class DuplicateDetector {
    public function detectarDuplicados(array $files): array {
        $hashes = [];
        $duplicados = [];

        foreach ($files as $file) {
            $contenido = file_get_contents($file);
            $bloques = preg_split('/\n{2,}/', $contenido); // bloques separados por saltos dobles

            foreach ($bloques as $bloque) {
                $clean = trim(preg_replace('/\s+/', '', $bloque));
                $hash = md5($clean);

                if (isset($hashes[$hash])) {
                    $duplicados[] = [
                        'bloque' => substr($bloque, 0, 100) . '...',
                        'archivo1' => $hashes[$hash],
                        'archivo2' => $file
                    ];
                } else {
                    $hashes[$hash] = $file;
                }
            }
        }

        return $duplicados;
    }
}
