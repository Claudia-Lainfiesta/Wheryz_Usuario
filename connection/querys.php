<?php
function connection()
{
    return @mysqli_connect('localhost', 'administradores', '496094', 'db_wheryz');
}

function login($user, $password)
{
    $connection = connection();
    $query = mysqli_query($connection, "SELECT id
                                        FROM tb_usuario 
                                        WHERE username = '$user' 
                                        AND password = '$password'");

    $query_array = mysqli_fetch_array($query);

    if (!empty($query_array)) {
        session_start();
        $_SESSION['active'] = true;
        $_SESSION['id'] = $query_array[0];
        header('Location: inicio.php');
    }
}

function logout()
{
    session_start();
    session_destroy();
    header('Location: ../index.php');
}

function register($name, $lastname, $username, $email, $password)
{
    $connection = connection();
    mysqli_query($connection, "INSERT INTO tb_usuario (name, lastname, username, email, password) VALUES ('$name', '$lastname', '$username', '$email', '$password')");
}

function name($id)
{
    $connection = connection();
    $query = mysqli_query($connection, "SELECT name
                                        FROM tb_usuario
                                        WHERE id = '$id'");

    $query_array = mysqli_fetch_array($query);

    return $query_array[0];
}
// En tu archivo de conexión (por ejemplo, connection.php)
function obtenerInformacionUsuario($id)
{
    $connection = connection(); // Asegúrate de tener esta función en tu archivo de conexión
    $query = mysqli_query($connection, "SELECT * FROM tb_usuario WHERE id = '$id'");
    
    if (!$query) {
        // Manejar el error de la consulta si es necesario
        die("Error al obtener información del usuario: " . mysqli_error($connection));
    }

    // Obtener el resultado como un array asociativo
    $user_info = mysqli_fetch_assoc($query);

    // Liberar recursos y cerrar la conexión
    mysqli_free_result($query);
    mysqli_close($connection);

    return $user_info;
}
