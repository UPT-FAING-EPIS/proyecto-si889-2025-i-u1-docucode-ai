<?php
require_once __DIR__ . '/FileHandler.php';
require_once __DIR__ . '/CodeReader.php';
require_once __DIR__ . '/UMLBuilder.php';
require_once __DIR__ . '/UMLGenerator.php';

class Facade {
    /**
     * Procesa el ZIP o carpeta de código y genera todos los diagramas UML.
     *
     * @param string $filePath  Ruta al ZIP o carpeta con el código fuente.
     * @return array            URLs de los diagramas generados:
     *                          [
     *                            'class'     => string,
     *                            'sequence'  => string,
     *                            'usecase'   => string,
     *                            'component' => string,
     *                            'package'   => string,
     *                            'activity'  => string[]  // uno o varios URLs
     *                          ]
     */
    public static function processCode(string $filePath): array
    {
        // 1) Extraer y listar todos los ficheros
        $handler = new FileHandler();
        $files   = $handler->extractAndListFiles($filePath);

        // 2) Leer todo el código
        $reader   = new CodeReader();
        $fullCode = $reader->readAll($files);

        // 3) Preparar builder y generator
        $builder   = new UMLBuilder();
        $generator = new UMLGenerator();

        $results = [];

        // 4) Diagrama de Clases
        $uml            = $builder->generateClassDiagram($files);
        $results['class'] = $generator->generarDesdeTexto($uml);

        // 5) Diagrama de Secuencia
        $uml               = $builder->generateSequenceDiagram($files);
        $results['sequence'] = $generator->generarDesdeTexto($uml);

        // 6) Diagrama de Casos de Uso
        $uml             = $builder->generateUseCaseDiagram($files);
        $results['usecase'] = $generator->generarDesdeTexto($uml);

        // 7) Diagrama de Componentes
        $uml                = $builder->generateComponentDiagram($files);
        $results['component'] = $generator->generarDesdeTexto($uml);

        // 8) Diagrama de Paquetes
        $uml             = $builder->generatePackageDiagram($files);
        $results['package'] = $generator->generarDesdeTexto($uml);

        // 9) Diagramas de Actividad (puede haber varios)
        $activityBlocks     = $builder->buildActivityDiagrams($fullCode);
        $results['activity'] = array_map(
            fn(string $block) => $generator->generarDesdeTexto($block),
            $activityBlocks
        );

        return $results;
    }
}
