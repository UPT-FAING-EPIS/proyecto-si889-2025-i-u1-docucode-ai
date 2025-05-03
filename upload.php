<?php
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $tmpName = $_FILES['file']['tmp_name'];
    $fileName = basename($_FILES['file']['name']);
    $targetPath = $uploadDir . $fileName;

    if (move_uploaded_file($tmpName, $targetPath)) {
        header("Location: analyze.php?file=" . urlencode($fileName));
        exit();
    } else {
        echo "Error al mover el archivo.";
    }
} else {
    echo "Error al subir el archivo.";
}
