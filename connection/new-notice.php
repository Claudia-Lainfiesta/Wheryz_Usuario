<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["images"]) && $_FILES["images"]["error"] == 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["images"]["name"]);

        move_uploaded_file($_FILES["images"]["tmp_name"], $targetFile);

        echo "Imagen subida correctamente. Nombre del archivo: " . basename($_FILES["images"]["name"]);
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
