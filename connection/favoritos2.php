<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_wheryz";

$conn = new mysqli($servername, $username, $password, $database);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_POST['id_usuario'];
    $id_colaborador = $_POST['id_colaborador'];
    $isFavorito = $_POST['isFavorito'];

    $query = "SELECT * FROM tb_usuario_favoritos WHERE id_usuario = ? AND id_colaborador = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $id_usuario, $id_colaborador);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $deleteQuery = "DELETE FROM tb_usuario_favoritos WHERE id_usuario = ? AND id_colaborador = ?";
        $deleteStmt = $conn->prepare($deleteQuery);
        $deleteStmt->bind_param("ii", $id_usuario, $id_colaborador);
        $deleteStmt->execute();
        echo "Eliminado de favoritos";
    } else {
        $insertQuery = "INSERT INTO tb_usuario_favoritos (id_usuario, id_colaborador) VALUES (?, ?)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bind_param("ii", $id_usuario, $id_colaborador);
        $insertStmt->execute();
        echo "Agregado a favoritos";
    }

    $stmt->close();
    $conn->close();
}
?>

