<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_wheryz";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST["id_usuario"];
    $id_colaborador = $_POST["id_colaborador"];
    $isFavorito = $_POST["isFavorito"];

    if ($isFavorito == "true") {
        $sql = "DELETE FROM tb_usuario_favoritos WHERE id_usuario = $id_usuario AND id_colaborador = $id_colaborador";
    } else {
        $sql = "INSERT INTO tb_usuario_favoritos (id_usuario, id_colaborador) VALUES ($id_usuario, $id_colaborador)";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Operación exitosa";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
