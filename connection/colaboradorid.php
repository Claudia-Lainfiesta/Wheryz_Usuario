<?php
$servername = "localhost";
$username = "administradores";
$password = "496094";
$dbname = "db_wheryz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$colaborador_id = $_GET['id'];

$sql = "SELECT * FROM tb_colaborador WHERE id = $colaborador_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id_colaborador = $row['id'];

    header("Location: ../colaboradores/$id_colaborador.php");
    exit();
} else {
    echo "<p>Colaborador no encontrado.</p>";
}

$conn->close();
?>

