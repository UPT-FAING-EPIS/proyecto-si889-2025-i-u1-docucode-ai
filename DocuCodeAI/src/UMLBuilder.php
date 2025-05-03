<?php

class UMLBuilder {

    // Diagrama de clases: clases, atributos y métodos públicos
    public function generateClassDiagram(array $files): string {
        $uml = "@startuml\nskinparam classAttributeIconSize 0\n";

        foreach ($files as $file) {
            $code = file_get_contents($file);

            // Buscar todas las clases
            preg_match_all('/class\s+(\w+)(?:\s+extends\s+(\w+))?/', $code, $classMatches, PREG_SET_ORDER);
            foreach ($classMatches as $match) {
                $className = $match[1];
                $parentClass = $match[2] ?? null;

                $uml .= "class $className {\n";

                // Buscar métodos públicos de esa clase
                preg_match_all('/public\s+function\s+(\w+)\s*\(/', $code, $methods);
                foreach ($methods[1] as $method) {
                    $uml .= "  +$method()\n";
                }

                // Buscar atributos públicos
                preg_match_all('/public\s+\$(\w+)/', $code, $attrs);
                foreach ($attrs[1] as $attr) {
                    $uml .= "  +\$$attr\n";
                }

                $uml .= "}\n";

                // Relación de herencia
                if ($parentClass) {
                    $uml .= "$parentClass <|-- $className\n";
                }
            }
        }

        $uml .= "@enduml";
        return $uml;
    }

    // Diagrama de secuencia: llamadas como $obj->metodo()
    public function generateSequenceDiagram(array $files): string {
        $uml = "@startuml\nactor Usuario\n";

        $participants = [];

        foreach ($files as $file) {
            $code = file_get_contents($file);

            // Detectar llamadas tipo $obj->metodo()
            preg_match_all('/\$([\w]+)->(\w+)\s*\(/', $code, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                $obj = ucfirst($match[1]);
                $method = $match[2];

                if (!in_array($obj, $participants)) {
                    $uml .= "participant $obj\n";
                    $participants[] = $obj;
                }

                $uml .= "Usuario -> $obj : $method()\n";
                $uml .= "$obj --> Usuario : resultado\n";
            }
        }

        if (count($participants) === 0) {
            $uml .= "Usuario -> Sistema : Subir archivo\n";
            $uml .= "Sistema -> OpenAI : Analizar código\n";
            $uml .= "Sistema -> PlantUML : Generar imagen UML\n";
            $uml .= "Sistema --> Usuario : Mostrar resultado\n";
        }

        $uml .= "@enduml";
        return $uml;
    }

    // Diagrama de casos de uso: según clases y funciones detectadas
    public function generateUseCaseDiagram(array $files): string {
        $uml = "@startuml\nactor Usuario\n";

        $casos = [];

        foreach ($files as $file) {
            $code = file_get_contents($file);

            // Detectar clases
            preg_match_all('/class\s+(\w+)/', $code, $matches);
            foreach ($matches[1] as $class) {
                $caso = "Usa clase $class";
                if (!in_array($caso, $casos)) {
                    $uml .= "Usuario --> ($caso)\n";
                    $casos[] = $caso;
                }
            }

            // Detectar llamadas a métodos
            preg_match_all('/->(\w+)\s*\(/', $code, $methods);
            foreach ($methods[1] as $method) {
                $caso = "Ejecuta $method";
                if (!in_array($caso, $casos)) {
                    $uml .= "Usuario --> ($caso)\n";
                    $casos[] = $caso;
                }
            }
        }

        if (count($casos) === 0) {
            $uml .= "Usuario --> (Subir Código)\n";
            $uml .= "Usuario --> (Ver análisis)\n";
            $uml .= "Usuario --> (Ver diagrama UML)\n";
        }

        $uml .= "@enduml";
        return $uml;
    }

    public function generateActivityDiagram(array $files): string {
        $uml = "@startuml\nstart\n";
    
        foreach ($files as $file) {
            $code = file_get_contents($file);
    
            if (preg_match_all('/\b(if|else|foreach|for|while|switch|function)\b/', $code, $matches, PREG_OFFSET_CAPTURE)) {
                foreach ($matches[1] as $match) {
                    $token = trim($match[0]);
                    $uml .= ":$token;\n";
                    if ($token === "if" || $token === "else") {
                        $uml .= "if (condición) then (sí)\n";
                        $uml .= "  :hacer algo;\n";
                        $uml .= "else (no)\n";
                        $uml .= "  :hacer otra cosa;\n";
                        $uml .= "endif\n";
                    }
                }
            }
        }
    
        $uml .= ":fin del flujo;\nstop\n@enduml";
        return $uml;
    }

    public function generateComponentDiagram(array $files): string {
        $uml = "@startuml\n";
    
        $componentes = [];
    
        foreach ($files as $file) {
            $nombre = pathinfo($file, PATHINFO_FILENAME);
            $componente = basename(dirname($file));
    
            if (!isset($componentes[$componente])) {
                $componentes[$componente] = [];
            }
    
            $componentes[$componente][] = $nombre;
        }
    
        foreach ($componentes as $paquete => $clases) {
            $uml .= "package \"$paquete\" {\n";
            foreach ($clases as $clase) {
                $uml .= "  [{$clase}]\n";
            }
            $uml .= "}\n";
        }
    
        $uml .= "@enduml";
        return $uml;
    }

    
    public function generatePackageDiagram(array $files): string {
        $uml = "@startuml\n";
    
        foreach ($files as $file) {
            $path = str_replace("\\", "/", $file);
            $parts = explode("/", $path);
            $className = pathinfo($file, PATHINFO_FILENAME);
            $package = end($parts); // carpeta inmediata
    
            $uml .= "package \"$package\" {\n";
            $uml .= "  class $className\n";
            $uml .= "}\n";
        }
    
        $uml .= "@enduml";
        return $uml;
    }
    
    
}
