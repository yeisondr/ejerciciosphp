<?php
if (isset($_FILES['archivo'])) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $rutaTmp = $_FILES['archivo']['tmp_name'];
    move_uploaded_file($rutaTmp, "uploads/" . $nombreArchivo);
    echo "Archivo subido con éxito";
}
?>
