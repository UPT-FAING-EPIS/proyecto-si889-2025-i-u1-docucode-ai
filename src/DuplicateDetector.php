<?php

class DuplicateDetector {

    private int $windowSize = 6; // Cantidad de líneas por bloque a comparar

    public function detectarDuplicados(array $files): array {
        $bloquesPorHash = [];
        $duplicados = [];

        foreach ($files as $file) {
            $lineas = file($file);
            $lineas = $this->preprocesarLineas($lineas);

            for ($i = 0; $i <= count($lineas) - $this->windowSize; $i++) {
                $bloque = array_slice($lineas, $i, $this->windowSize);
                $textoBloque = implode("\n", $bloque);
                $clean = preg_replace('/\s+/', '', $textoBloque);
                $hash = md5($clean);

                if (isset($bloquesPorHash[$hash])) {
                    foreach ($bloquesPorHash[$hash] as $anterior) {
                        // Evita duplicados dentro del mismo archivo
                        if ($anterior['archivo'] !== $file) {
                            $duplicados[] = [
                                'bloque'    => substr($textoBloque, 0, 150) . '...',
                                'archivo1'  => $anterior['archivo'],
                                'archivo2'  => $file,
                                'linea1'    => $anterior['linea'],
                                'linea2'    => $i + 1
                            ];
                        }
                    }
                }

                $bloquesPorHash[$hash][] = [
                    'archivo' => $file,
                    'linea'   => $i + 1
                ];
            }
        }

        return $this->eliminarDuplicadosRepetidos($duplicados);
    }

    private function preprocesarLineas(array $lineas): array {
        $result = [];

        foreach ($lineas as $linea) {
            $linea = preg_replace('/\/\/.*$/', '', $linea);     // elimina comentarios //
            $linea = preg_replace('/\/\*.*?\*\//s', '', $linea); // elimina comentarios /* */
            $linea = trim($linea);
            if ($linea !== '') {
                $result[] = $linea;
            }
        }

        return $result;
    }

    private function eliminarDuplicadosRepetidos(array $duplicados): array {
        $unicos = [];
        foreach ($duplicados as $dup) {
            $key = md5($dup['archivo1'] . $dup['archivo2'] . $dup['bloque']);
            $unicos[$key] = $dup;
        }
        return array_values($unicos);
    }
}
