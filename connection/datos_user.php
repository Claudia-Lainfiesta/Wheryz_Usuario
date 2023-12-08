<?php
session_start();

if (!isset($_SESSION['active'])) {
    header('Location: ../index.php');
    exit();
}

include('../connection/querys.php');

$id = $_SESSION['id'];
$user_info = obtenerInformacionUsuario($id);


session_start();

if (!isset($_SESSION['active'])) {
    header('Location: ../index.php');
    exit();
}

include('tu_archivo_de_conexion.php');

$id = $_SESSION['id'];
$user_info = obtenerInformacionUsuario($id);




$name = $user_info['name'];
$lastname = $user_info['lastname'];
$username = $user_info['username'];
$email = $user_info['email'];



$name = $user_info['name'];
$lastname = $user_info['lastname'];
$username = $user_info['username'];
$email = $user_info['email'];
?>