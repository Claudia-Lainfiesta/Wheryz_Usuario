<?php
session_start();

if (!isset($_SESSION['active'])) {
    header('Location: ../index.php');
    exit();
}

include('../connection/querys.php'); // Reemplaza con la ruta correcta

$id = $_SESSION['id'];
$user_info = obtenerInformacionUsuario($id); // Crea esta función en tu archivo de conexión

// En tu archivo datos_user.php
session_start();

if (!isset($_SESSION['active'])) {
    header('Location: ../index.php');
    exit();
}

include('tu_archivo_de_conexion.php'); // Reemplaza con la ruta correcta

$id = $_SESSION['id'];
$user_info = obtenerInformacionUsuario($id);

// ...

// Renderizar los valores en los campos del formulario
$name = $user_info['name'];
$lastname = $user_info['lastname'];
$username = $user_info['username'];
$email = $user_info['email'];


// Renderiza los valores en los campos del formulario
$name = $user_info['name'];
$lastname = $user_info['lastname'];
$username = $user_info['username'];
$email = $user_info['email'];
?>