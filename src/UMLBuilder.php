<?php
require_once __DIR__ . '/OpenAIClient.php';
file_put_contents("uml_trace.txt", "ESTOY USANDO EL UMLBUILDER CORRECTO");

class UMLBuilder {

    public function generateClassDiagram(array $files): string {
        $uml = "@startuml
skinparam classAttributeIconSize 0
";
        $classes = [];
        foreach ($files as $file) {
            $code = file_get_contents($file);

            preg_match_all('/class\s+(\w+)(?:\s+extends\s+(\w+))?(?:\s+implements\s+([\w,\s]+))?/', $code, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                $className = $match[1];
                $parentClass = $match[2] ?? null;
                $interfaces = isset($match[3]) ? explode(',', str_replace(' ', '', $match[3])) : [];

                $uml .= "class $className {
";

                preg_match_all('/(public|protected|private)\s+(static\s+)?function\s+(\w+)\s*\(/', $code, $methods, PREG_SET_ORDER);
                foreach ($methods as $m) {
                    $symbol = $m[1] === 'public' ? '+' : ($m[1] === 'protected' ? '#' : '-');
                    $uml .= "  {$symbol}{$m[3]}()
";
                }

                preg_match_all('/(public|protected|private)\s+\$(\w+)/', $code, $props, PREG_SET_ORDER);
                foreach ($props as $p) {
                    $symbol = $p[1] === 'public' ? '+' : ($p[1] === 'protected' ? '#' : '-');
                    $uml .= "  {$symbol}\${$p[2]}
";
                }

                $uml .= "}
";

                if ($parentClass) $uml .= "$parentClass <|-- $className
";
                foreach ($interfaces as $interface) {
                    $uml .= "$interface <|.. $className
";
                }
                $classes[$className] = true;
            }
        }
        return $uml . "@enduml";
    }

    public function generateSequenceDiagrams(array $files): array {
        $diagrams = [];

        foreach ($files as $file) {
            $code = file_get_contents($file);
            $filename = basename($file, '.php');

            $blocks = [];

            // Extraer funciones y métodos
            preg_match_all('/function\s+(\w+)\s*\(.*?\)\s*{(.*?)}/s', $code, $matches, PREG_SET_ORDER);
            foreach ($matches as $m) {
                $blocks[] = ['name' => $m[1], 'body' => $m[2]];
            }

            // Si no hay funciones, analizar el bloque global
            if (empty($blocks)) {
                $blocks[] = ['name' => 'global', 'body' => $code];
            }

            foreach ($blocks as $block) {
                $methodName = $block['name'];
                $body = $block['body'];

                preg_match_all('/\$([a-zA-Z_][\w]*)\s*=\s*new\s+([a-zA-Z_][\w]*)/', $body, $instances, PREG_SET_ORDER);
                preg_match_all('/\$([a-zA-Z_][\w]*)->([a-zA-Z_][\w]*)\s*\(/', $body, $calls, PREG_SET_ORDER);

                if (empty($calls)) continue;

                $uml = "@startuml\n";
                $uml .= "title Secuencia: $filename::$methodName\n";
                $uml .= "actor Usuario\n";

                $participants = [];
                foreach ($instances as $match) {
                    $obj = $match[1];
                    $class = $match[2];
                    if (!in_array($obj, $participants)) {
                        $uml .= "participant $class as $obj\n";
                        $participants[] = $obj;
                    }
                }

                foreach ($calls as $call) {
                    $obj = $call[1];
                    $method = $call[2];
                    $uml .= "Usuario -> $obj : $method()\n";
                    $uml .= "$obj --> Usuario : resultado\n";
                }

                $uml .= "@enduml";

                $diagrams[] = [
                    'title' => "Secuencia: $filename::$methodName",
                    'uml' => $uml
                ];
            }
        }

        return $diagrams;
    }



    public function generateUseCaseDiagram(array $files): string {
        $uml = "@startuml
actor Usuario
";
        $acciones = [];
        foreach ($files as $file) {
            $code = file_get_contents($file);
            preg_match_all('/(?:\$\w+->|\w+::)(\w+)\(/', $code, $calls);
            foreach ($calls[1] as $method) {
                $label = ucfirst(str_replace('_', ' ', $method));
                if (!in_array($label, $acciones)) {
                    $uml .= "Usuario --> ($label)
";
                    $acciones[] = $label;
                }
            }
        }
        return $uml . "@enduml";
    }

    public function generateComponentDiagram(array $files): string {
        $uml = "@startuml
";
        $map = [];
        foreach ($files as $file) {
            $folder = basename(dirname($file));
            $class = pathinfo($file, PATHINFO_FILENAME);
            $map[$folder][] = $class;
        }
        foreach ($map as $folder => $classes) {
            $uml .= "package \"$folder\" {\n
";
            foreach ($classes as $cls) {
                $uml .= "  [$cls]
";
            }
            $uml .= "}
";
        }
        return $uml . "@enduml";
    }

    public function generatePackageDiagram(array $files): string {
        $uml = "@startuml
";
        $packages = [];
        foreach ($files as $file) {
            $pathParts = explode(DIRECTORY_SEPARATOR, $file);
            $folder = $pathParts[count($pathParts) - 2] ?? '';
            $class = pathinfo($file, PATHINFO_FILENAME);
            $packages[$folder][] = $class;
        }
        foreach ($packages as $folder => $classes) {
            $uml .= "package \"$folder\" {\n
";
            foreach ($classes as $cls) {
                $uml .= "  class $cls
";
            }
            $uml .= "}
";
        }
        return $uml . "@enduml";
    }

    public function buildActivityDiagrams(string $fullCode): array {
        $ai = new OpenAIClient();

        $prompt = <<<PROMPT
Eres un generador de diagramas de actividad UML en PlantUML.

Analiza el siguiente código PHP y genera múltiples diagramas de actividad, cada uno con:

1. Un título PlantUML como `title "Nombre del flujo"` DENTRO del bloque @startuml.
2. NO uses foreach ni switch-case (PlantUML no los soporta).
3. Usa while, if, repeat y decisiones válidas.
4. Evita comillas, explicaciones, Markdown o texto narrativo.
5. Cada diagrama debe empezar con `@startuml`, terminar con `@enduml`, separados por EXACTAMENTE: ===ACTIVITY===

Ahora analiza este código y genera los diagramas posibles:

```php
$fullCode
```
PROMPT;

        $rawResponse = $ai->chat([
            ['role' => 'system', 'content' => 'Eres un generador preciso de diagramas PlantUML.'],
            ['role' => 'user', 'content' => $prompt]
        ]);

        file_put_contents("openai_activity_response.txt", $rawResponse);

        $parts = explode("===ACTIVITY===", $rawResponse);
        $diagrams = [];

        foreach ($parts as $part) {
            $clean = trim($part);
            $clean = preg_replace('/[^\x20-\x7E\r\n]+/u', '', $clean);
            if (preg_match('/@startuml.*?@enduml/s', $clean, $match)) {
                $uml = trim($match[0]);
                $titleMatch = '';
                if (preg_match('/title\s+\"?(.*?)\"?\n/', $uml, $tm)) {
                    $titleMatch = trim($tm[1]);
                }
                $diagrams[] = ['title' => $titleMatch ?: 'Flujo detectado', 'uml' => $uml];
            }
        }

        if (empty($diagrams)) {
            $diagrams[] = ['title' => 'Analizar Código', 'uml' => $this->generateActivityDiagramFallback()];
        }

        return $diagrams;
    }

    private function generateActivityDiagramFallback(): string {
        return "@startuml\ntitle \"Diagrama vacío\"\nstart\n:Analizar Código;\nstop\n@enduml";
    }
}