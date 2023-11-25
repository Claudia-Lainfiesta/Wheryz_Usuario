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
    } else {
        session_destroy();
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
