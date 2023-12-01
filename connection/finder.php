<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "administradores";
$password = "496094";
$dbname = "db_wheryz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener la búsqueda del formulario
$busqueda = $_POST['busqueda'];

// Consulta SQL para buscar en la tabla de usuarios
$sql = "SELECT * FROM tb_colaborador WHERE lastname LIKE '%$busqueda%' OR username LIKE '%$busqueda%'";
$result = $conn->query($sql);

// Mostrar los resultados
echo "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='styles.css'>
    <title>Resultados de Búsqueda</title>
</head>
<body>
";
echo "<h2 class='result-title'>Resultados de la búsqueda:</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='result-item'>Nombre: " . $row['name'] . "<br>Usuario: " . $row['username'] . "</div>";
    }
} else {
    echo "<p class='no-results'>No se encontraron resultados.</p>";
}
echo "
</body>
</html>
";
// Cerrar la conexión a la base de datos
$conn->close();
?>
