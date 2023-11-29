<?php
// Configura la conexión a la base de datos
$servername = "localhost"; // Cambia esto con tu servidor de base de datos
$username = "administradores"; // Cambia esto con tu nombre de usuario de base de datos
$password = "496094"; // Cambia esto con tu contraseña de base de datos
$dbname = "db_wheryz"; // Cambia esto con el nombre de tu base de datos

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Supongamos que el usuario ha iniciado sesión y tienes su ID de usuario
$user_id = 1; // Reemplaza esto con el ID de usuario real, que deberías obtener después del inicio de sesión

// Consulta para obtener los datos del usuario
$sql = "SELECT * FROM tb_usuario WHERE id = $user_id";
$result = $conn->query($sql);

// Verifica si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Si hay resultados, obtén la fila como un array asociativo
    $row = $result->fetch_assoc();

    // Ahora, asigna los valores a las variables que usarás en el formulario HTML
    $name = $row["name"];
    $lastname = $row["lastname"];
    $user = $row["user"];
    $email = $row["email"];
} else {
    echo "No se encontraron resultados para el usuario con ID $user_id";
}

// Cierra la conexión a la base de datos
$conn->close();
?>