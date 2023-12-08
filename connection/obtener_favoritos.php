<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_wheryz";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener la información de los colaboradores favoritos
$sql = "SELECT c.nombre_usuario, c.dirección, c.teléfono
        FROM tb_usuario_favoritos uf
        INNER JOIN tb_colaborador c ON uf.id_colaborador = c.id_colaborador";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Genera el contenido HTML de la tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nombre_usuario'] . "</td>";
        echo "<td>" . $row['dirección'] . "</td>";
        echo "<td>" . $row['teléfono'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No hay colaboradores favoritos.</td></tr>";
}
echo "</body>";
echo "</html>";

$conn->close();
?>