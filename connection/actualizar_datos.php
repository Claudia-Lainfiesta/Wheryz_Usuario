<?php
session_start();
include('querys.php');

if (isset($_POST['guardar_datos'])) {
    $id_usuario = $_SESSION['id'];

    $informacion_usuario = obtenerInformacionUsuario($id_usuario);

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : $informacion_usuario['nombre'];
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : $informacion_usuario['apellido'];
    $nombre_usuario = isset($_POST['nombre_usuario']) ? $_POST['nombre_usuario'] : $informacion_usuario['nombre_usuario'];
    $correo_electrónico = isset($_POST['correo_electrónico']) ? $_POST['correo_electrónico'] : $informacion_usuario['correo_electrónico'];
    $teléfono = isset($_POST['teléfono']) ? $_POST['teléfono'] : $informacion_usuario['teléfono'];

    actualizarDatosUsuario($id_usuario, $nombre, $apellido, $nombre_usuario, $correo_electrónico, $teléfono);

    header('Location: ../configuracion.php');
    exit();
}
?>
