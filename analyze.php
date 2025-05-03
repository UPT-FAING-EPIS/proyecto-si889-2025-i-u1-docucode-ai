<?php
require_once 'src/Facade.php';
require_once 'src/UMLBuilder.php';
require_once 'src/UMLGenerator.php';
require_once 'src/FileHandler.php';

$file = $_GET['file'] ?? '';
if (!$file) die("Archivo no especificado.");

// === Paso 1: Análisis del código con OpenAI
$resultado = Facade::processCode("uploads/" . $file);

// === Paso 2: Extraer archivos para UML
$handler = new FileHandler();
$files = $handler->extractAndListFiles("uploads/" . $file);

// === Paso 3: Generar diagramas dinámicamente
$builder = new UMLBuilder();
$generator = new UMLGenerator();

// Diagrama de Clases
$classUml = $builder->generateClassDiagram($files);
$classUrl = $generator->generarDesdeTexto($classUml);

// Diagrama de Secuencia (ahora dinámico)
$seqUml = $builder->generateSequenceDiagram($files);
$seqUrl = $generator->generarDesdeTexto($seqUml);

// Diagrama de Casos de Uso (ahora dinámico)
$useUml = $builder->generateUseCaseDiagram($files);
$useUrl = $generator->generarDesdeTexto($useUml);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - DocuCodeAI</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; background-color: #f5f5f5; }
        h1, h2 { color: #333; }
        pre { background: #fff; border: 1px solid #ccc; padding: 1em; overflow-x: auto; }
        img { max-width: 100%; border: 1px solid #aaa; margin-bottom: 2em; }
    </style>
</head>
<body>

<h1>🧠 Resultado del análisis del código</h1>
<pre><?= htmlspecialchars($resultado) ?></pre>

<h2>📦 Diagrama de Clases UML</h2>
<img src="<?= $classUrl ?>" alt="Diagrama de Clases UML">
<pre><?= htmlspecialchars($classUml) ?></pre>

<h2>🔄 Diagrama de Secuencia UML</h2>
<img src="<?= $seqUrl ?>" alt="Diagrama de Secuencia UML">
<pre><?= htmlspecialchars($seqUml) ?></pre>

<h2>🎯 Diagrama de Casos de Uso UML</h2>
<img src="<?= $useUrl ?>" alt="Diagrama de Casos de Uso UML">
<pre><?= htmlspecialchars($useUml) ?></pre>

</body>
</html>
