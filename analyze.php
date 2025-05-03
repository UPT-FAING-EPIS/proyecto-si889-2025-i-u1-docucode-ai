<?php
require_once __DIR__ . '/src/Facade.php';

$file = $_GET['file'] ?? '';
if (!$file) die("Archivo no especificado.");

$resultado = Facade::processCode("uploads/" . $file);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - DocuCodeAI</title>
</head>
<body>
    <h1>Resultado del análisis del código:</h1>
    <pre><?= htmlspecialchars($resultado) ?></pre>
</body>
</html>
