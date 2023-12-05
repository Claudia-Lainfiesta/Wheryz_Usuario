<?php
session_start();

if (!isset($_SESSION['active'])) {
    header('Location: ../inicio.php');
    exit();
}

include('../connection/querys.php'); // Reemplaza con la ruta correcta

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Validar y sanitizar datos si es necesario

    $connection = connection();

    // Actualizar la información del usuario en la base de datos
    $update_query = "UPDATE tb_usuario 
                     SET name = '$name', lastname = '$lastname', username = '$username', email = '$email' 
                     WHERE id = '$id'";

    if (mysqli_query($connection, $update_query)) {
        // Redirigir a la página de datos del usuario con un mensaje de éxito si es necesario
        header('Location: datos_user.php?success=1');
        exit();
    } else {
        // Manejar el error de actualización si es necesario
        echo "Error al actualizar los datos: " . mysqli_error($connection);
    }

    mysqli_close($connection);
} else {
    // Redirigir a la página de inicio si se intenta acceder directamente a este archivo sin un formulario POST
    header('Location: ../index.php');
    exit();
}
