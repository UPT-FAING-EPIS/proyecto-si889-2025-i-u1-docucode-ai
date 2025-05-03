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

// 4. Diagrama de Actividad
$activityUml = $builder->generateActivityDiagram($files);
$activityUrl = $generator->generarDesdeTexto($activityUml);

// 5. Diagrama de Componentes
$componentUml = $builder->generateComponentDiagram($files);
$componentUrl = $generator->generarDesdeTexto($componentUml);

// 6. Diagrama de Paquetes
$packageUml = $builder->generatePackageDiagram($files);
$packageUrl = $generator->generarDesdeTexto($packageUml);

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
        .analyze-box {
            background: #ffffff;
            border-left: 6px solid #4CAF50;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            white-space: pre-wrap;
            line-height: 1.6;
            color: #333;
            font-family: "Courier New", Courier, monospace;
            border-radius: 6px;
            max-height: 300px;
            overflow: auto;
        }

    </style>
</head>
<body>

<h1>🧠 Resultado del análisis del código</h1>
<div class="analyze-box">
    <?= nl2br(htmlspecialchars($resultado)) ?>
</div>


<h2>📦 Diagrama de Clases UML</h2>
<img src="<?= $classUrl ?>" alt="Diagrama de Clases UML">
<pre><?= htmlspecialchars($classUml) ?></pre>

<h2>🔄 Diagrama de Secuencia UML</h2>
<img src="<?= $seqUrl ?>" alt="Diagrama de Secuencia UML">
<pre><?= htmlspecialchars($seqUml) ?></pre>

<h2>🎯 Diagrama de Casos de Uso UML</h2>
<img src="<?= $useUrl ?>" alt="Diagrama de Casos de Uso UML">
<pre><?= htmlspecialchars($useUml) ?></pre>

<h2>🔁 Diagrama de Actividad UML</h2>
<img src="<?= $activityUrl ?>" alt="Diagrama de Actividad UML">
<pre><?= htmlspecialchars($activityUml) ?></pre>

<h2>🧩 Diagrama de Componentes UML</h2>
<img src="<?= $componentUrl ?>" alt="Diagrama de Componentes UML">
<pre><?= htmlspecialchars($componentUml) ?></pre>

<h2>📦 Diagrama de Paquetes UML</h2>
<img src="<?= $packageUrl ?>" alt="Diagrama de Paquetes UML">
<pre><?= htmlspecialchars($packageUml) ?></pre>

</body>
</html>
