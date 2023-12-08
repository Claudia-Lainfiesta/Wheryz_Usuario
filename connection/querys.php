<?php
function connection()
{
  return @mysqli_connect(
    'localhost',
    'root',
    '',
    'db_wheryz'
  );
}

function login($nombre_usuario, $contraseña)
{
  $connection = connection();
  $query = mysqli_query($connection, "SELECT id_usuario
                                        FROM tb_usuario
                                        WHERE nombre_usuario = '$nombre_usuario'
                                        AND contraseña = '$contraseña'");
  $query_array = mysqli_fetch_array($query);

  if (!empty($query_array)) {
    session_start();
    $_SESSION['active'] = true;
    $_SESSION['id'] = $query_array[0];
    header('Location: inicio.php');
    return true;
  } else {
    session_destroy();
    return false;
  }
}

function logout()
{
  session_start();
  session_destroy();
  header('Location: ../index.php');
}

function register(
  $nombre,
  $apellido,
  $nombre_usuario,
  $correo_electrónico,
  $teléfono,
  $contraseña)
  {
    $connection = connection();
    Mysqli_query(
        $connection,
        "INSERT INTO tb_usuario (
        nombre,
        apellido,
        nombre_usuario,
        correo_electrónico,
        teléfono,
        contraseña
        )
        VALUES (
        '$nombre',
        '$apellido',
        '$nombre_usuario',
        '$correo_electrónico',
        '$teléfono',
        '$contraseña');
        "
    );
  }


function name($id)
{
$connection = connection();
   $query = mysqli_query($connection, "SELECT name
                                       FROM tb_usuario
                                       WHERE id_usuario = '$id'");

    $query_array = mysqli_fetch_array($query);

    return $query_array[0];
}
// busqueda
function obtenerInformacionUsuario($id)
{
    $connection = connection();
    $query = mysqli_query($connection, "SELECT * FROM tb_usuario WHERE id_usuario = '$id'");
    if (!$query) {
        die("Error al obtener información del usuario: " . mysqli_error($connection));
    }

    $user_info = mysqli_fetch_assoc($query);

    mysqli_free_result($query);
    mysqli_close($connection);

    return $user_info;
}
//configuracion
function actualizarDatosUsuario($id, $nombre, $apellido, $nombre_usuario, $correo_electrónico, $teléfono)
{
    $connection = connection();
    $query = "UPDATE tb_usuario
              SET nombre = '$nombre',
                  apellido = '$apellido',
                  nombre_usuario = '$nombre_usuario',
                  correo_electrónico = '$correo_electrónico',
                  teléfono = '$teléfono'
              WHERE id_usuario = '$id'";
    mysqli_query($connection, $query);
}
