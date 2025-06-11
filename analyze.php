<?php
// Carga de clases
require_once 'src/FileHandler.php';
require_once 'src/CodeReader.php';
require_once 'src/OpenAIClient.php';
require_once 'src/DuplicateDetector.php';
require_once 'src/UMLBuilder.php';
require_once 'src/UMLGenerator.php';

$file = $_GET['file'] ?? '';
if (!$file) {
    die("Archivo no especificado.");
}

$uploadPath = "uploads/" . $file;

// 1) Extraer ficheros y leer TODO el código
$handler   = new FileHandler();
$files     = $handler->extractAndListFiles($uploadPath);

$reader    = new CodeReader();
$fullCode  = $reader->readAll($files);

// 2) Análisis natural del código
$ai        = new OpenAIClient();
$resultado = $ai->analyzeCode($fullCode);

// 3) Evaluación de calidad
$evaluacion = $ai->evaluarCalidadCodigo($fullCode);

// 4) Detección de código duplicado
$detector   = new DuplicateDetector();
$duplicados = $detector->detectarDuplicados($files);

// 5) Generación de diagramas UML
$builder   = new UMLBuilder();
$generator = new UMLGenerator();

// — Diagrama de Clases
$classPlantUml = $builder->generateClassDiagram($files);
$classUrl      = $generator->generarDesdeTexto($classPlantUml);

// — Diagramas de Secuencia
$sequenceDiagrams = $builder->generateSequenceDiagrams($files);

// — Diagrama de Casos de Uso
$usePlantUml = $builder->generateUseCaseDiagram($files);
$useUrl      = $generator->generarDesdeTexto($usePlantUml);

// — Diagrama de Componentes
$compPlantUml = $builder->generateComponentDiagram($files);
$compUrl      = $generator->generarDesdeTexto($compPlantUml);

// — Diagrama de Paquetes
$packPlantUml = $builder->generatePackageDiagram($files);
$packUrl      = $generator->generarDesdeTexto($packPlantUml);

// — Diagramas de Actividad
$activityBlocks = $builder->buildActivityDiagrams($fullCode);
$activityUrls   = [];
foreach ($activityBlocks as $block) {
    $activityUrls[] = [
        'title' => $block['title'],
        'uml'   => $block['uml'],
        'url'   => $generator->generarDesdeTexto($block['uml'])
    ];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - DocuCodeAI</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; background: #f5f5f5; }
        h1,h2,h3 { color: #333; }
        .analyze-box {
            background: #fff; border-left: 6px solid #4CAF50;
            padding: 20px; margin-bottom: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            white-space: pre-wrap; line-height: 1.6;
            font-family: "Courier New", Courier, monospace;
            border-radius: 6px; max-height: 300px; overflow: auto;
        }
        img { max-width: 100%; border: 1px solid #aaa; margin-bottom: 1em; }
    </style>
</head>
<body>

<h1>🧠 Resultado del análisis del código</h1>
<div class="analyze-box"><?= nl2br(htmlspecialchars($resultado)) ?></div>

<h2>📊 Evaluación de la calidad del código</h2>
<div class="analyze-box"><?= nl2br(htmlspecialchars($evaluacion)) ?></div>

<h2>🧬 Detección de código duplicado</h2>
<?php if (count($duplicados) > 0): ?>
    <ul>
    <?php foreach ($duplicados as $dup): ?>
        <li>
            <strong><?= basename($dup['archivo1']) ?></strong> (línea <?= $dup['linea1'] ?>) y 
            <strong><?= basename($dup['archivo2']) ?></strong> (línea <?= $dup['linea2'] ?>) comparten un bloque similar:<br>
            <code><?= htmlspecialchars($dup['bloque']) ?></code>
        </li>
    <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No se encontraron duplicados.</p>
<?php endif; ?>


<h2>📦 Diagrama de Clases UML</h2>
<img src="<?= $classUrl ?>" alt="Diagrama de Clases UML">
<pre class="analyze-box"><?= htmlspecialchars($classPlantUml) ?></pre>

<h2>🔄 Diagramas de Secuencia UML</h2>
<?php foreach ($sequenceDiagrams as $seq): ?>
    <h3><?= htmlspecialchars($seq['title']) ?></h3>
    <img src="<?= $generator->generarDesdeTexto($seq['uml']) ?>" alt="Diagrama de Secuencia">
    <pre class="analyze-box"><?= htmlspecialchars($seq['uml']) ?></pre>
<?php endforeach; ?>

<h2>🎯 Diagrama de Casos de Uso UML</h2>
<img src="<?= $useUrl ?>" alt="Diagrama de Casos de Uso UML">
<pre class="analyze-box"><?= htmlspecialchars($usePlantUml) ?></pre>

<h2>🧩 Diagrama de Componentes UML</h2>
<img src="<?= $compUrl ?>" alt="Diagrama de Componentes UML">
<pre class="analyze-box"><?= htmlspecialchars($compPlantUml) ?></pre>

<h2>📦 Diagrama de Paquetes UML</h2>
<img src="<?= $packUrl ?>" alt="Diagrama de Paquetes UML">
<pre class="analyze-box"><?= htmlspecialchars($packPlantUml) ?></pre>

<h2>🔁 Diagramas de Actividad UML</h2>
<?php if (!empty($activityUrls)): ?>
    <?php foreach ($activityUrls as $i => $data): ?>
        <h3><?= htmlspecialchars($data['title']) ?></h3>
        <img src="<?= $data['url'] ?>" alt="Actividad <?= $i+1 ?>">
        <pre class="analyze-box"><?= htmlspecialchars($data['uml']) ?></pre>
    <?php endforeach; ?>
<?php else: ?>
    <p>No se detectaron flujos de actividad.</p>
<?php endif; ?>

</body>
</html>
