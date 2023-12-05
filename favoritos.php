<?php
session_start();
if (!isset($_SESSION['active'])) {
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Wheryz | Favoritos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/image2vector.svg" type="image/x-icon">
    <!--CSS GENERAL-->
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/finder.css">
    <!--CSS SOLO DE FAVORITOS-->
    <link rel="stylesheet" href="css/favoritos.css">
    <!--JS GENERAL-->
    <script src="js/nav.js"></script>
    <!--CSS SOLO DE FAVORITOS-->
    <script src="js/favoritos.js"></script>
</head>
<body>
<!--Navbar principal/CSS y JS=nav-->
<header class="menu" id="menu">
    <nav>
        <ul>
            <li id="minimize">
                <a onclick="minimize()" class="size-aside-navbar">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1wYW5lbC1sZWZ0LWNsb3NlIj48cmVjdCB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHg9IjMiIHk9IjMiIHJ4PSIyIiByeT0iMiIvPjxwYXRoIGQ9Ik05IDN2MTgiLz48cGF0aCBkPSJtMTYgMTUtMy0zIDMtMyIvPjwvc3ZnPg=="
                         alt="minimize"/>
                </a>
            </li>
            <li hidden id="maximice" class="size-aside-navbar">
                <a onclick="maximice()">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1wYW5lbC1sZWZ0LW9wZW4iPjxyZWN0IHdpZHRoPSIxOCIgaGVpZ2h0PSIxOCIgeD0iMyIgeT0iMyIgcng9IjIiIHJ5PSIyIi8+PHBhdGggZD0iTTkgM3YxOCIvPjxwYXRoIGQ9Im0xNCA5IDMgMy0zIDMiLz48L3N2Zz4="
                         alt="maximice"/>
                </a>
            </li>
        </ul>

        <img src="img/image2vector.svg" alt="logo" id="titulo" style="width: 50%; margin-left: 20%; margin-bottom:3%; margin-top:3%;">

        <ul>
            <li>
                <a href="inicio.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1ob21lIj48cGF0aCBkPSJtMyA5IDktNyA5IDd2MTFhMiAyIDAgMCAxLTIgMkg1YTIgMiAwIDAgMS0yLTJ6Ii8+PHBvbHlsaW5lIHBvaW50cz0iOSAyMiA5IDEyIDE1IDEyIDE1IDIyIi8+PC9zdmc+"
                         alt="home"/>
                    <span id="inicio">Inicio</span>
                </a>
            </li>
            <li>
                <a href="busqueda.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zZWFyY2giPjxjaXJjbGUgY3g9IjExIiBjeT0iMTEiIHI9IjgiLz48cGF0aCBkPSJtMjEgMjEtNC4zLTQuMyIvPjwvc3ZnPg=="
                         alt="busqueda"/>
                    <span id="busqueda">Búsqueda</span>
                </a>
            </li>
            <li>
                <a href="favoritos.php" class="active">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zdGFyIj48cG9seWdvbiBwb2ludHM9IjEyIDIgMTUuMDkgOC4yNiAyMiA5LjI3IDE3IDE0LjE0IDE4LjE4IDIxLjAyIDEyIDE3Ljc3IDUuODIgMjEuMDIgNyAxNC4xNCAyIDkuMjcgOC45MSA4LjI2IDEyIDIiLz48L3N2Zz4="
                         alt="favoritos"/>
                    <span id="favoritos">Favoritos</span>
                </a>
            </li>
            <li>
                <a href="reservaciones.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1ib29rLW1hcmtlZCI+PHBhdGggZD0iTTQgMTkuNXYtMTVBMi41IDIuNSAwIDAgMSA2LjUgMkgyMHYyMEg2LjVhMi41IDIuNSAwIDAgMSAwLTVIMjAiLz48cG9seWxpbmUgcG9pbnRzPSIxMCAyIDEwIDEwIDEzIDcgMTYgMTAgMTYgMiIvPjwvc3ZnPg=="
                         alt="reservaciones"/>
                    <span id="reservaciones">Reservaciones</span>
                </a>
            </li>
            <li>
                <a href="colaborador.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1idWlsZGluZy0yIj48cGF0aCBkPSJNNiAyMlY0YTIgMiAwIDAgMSAyLTJoOGEyIDIgMCAwIDEgMiAydjE4WiIvPjxwYXRoIGQ9Ik02IDEySDRhMiAyIDAgMCAwLTIgMnY2YTIgMiAwIDAgMCAyIDJoMiIvPjxwYXRoIGQ9Ik0xOCA5aDJhMiAyIDAgMCAxIDIgMnY5YTIgMiAwIDAgMS0yIDJoLTIiLz48cGF0aCBkPSJNMTAgNmg0Ii8+PHBhdGggZD0iTTEwIDEwaDQiLz48cGF0aCBkPSJNMTAgMTRoNCIvPjxwYXRoIGQ9Ik0xMCAxOGg0Ii8+PC9zdmc+"
                         alt="colaborador"/>
                    <span id="colaborador">Convertirse en colaborador</span>
                </a>
            </li>
        </ul>
    </nav>
    <nav>
        <ul>
            <li>
                <a href="configuracion.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zZXR0aW5ncyI+PHBhdGggZD0iTTEyLjIyIDJoLS40NGEyIDIgMCAwIDAtMiAydi4xOGEyIDIgMCAwIDEtMSAxLjczbC0uNDMuMjVhMiAyIDAgMCAxLTIgMGwtLjE1LS4wOGEyIDIgMCAwIDAtMi43My43M2wtLjIyLjM4YTIgMiAwIDAgMCAuNzMgMi43M2wuMTUuMWEyIDIgMCAwIDEgMSAxLjcydi41MWEyIDIgMCAwIDEtMSAxLjc0bC0uMTUuMDlhMiAyIDAgMCAwLS43MyAyLjczbC4yMi4zOGEyIDIgMCAwIDAgMi43My43M2wuMTUtLjA4YTIgMiAwIDAgMSAyIDBsLjQzLjI1YTIgMiAwIDAgMSAxIDEuNzNWMjBhMiAyIDAgMCAwIDIgMmguNDRhMiAyIDAgMCAwIDItMnYtLjE4YTIgMiAwIDAgMSAxLTEuNzNsLjQzLS4yNWEyIDIgMCAwIDEgMiAwbC4xNS4wOGEyIDIgMCAwIDAgMi43My0uNzNsLjIyLS4zOWEyIDIgMCAwIDAtLjczLTIuNzNsLS4xNS0uMDhhMiAyIDAgMCAxLTEtMS43NHYtLjVhMiAyIDAgMCAxIDEtMS43NGwuMTUtLjA5YTIgMiAwIDAgMCAuNzMtMi43M2wtLjIyLS4zOGEyIDIgMCAwIDAtMi43My0uNzNsLS4xNS4wOGEyIDIgMCAwIDEtMiAwbC0uNDMtLjI1YTIgMiAwIDAgMS0xLTEuNzNWNGEyIDIgMCAwIDAtMi0yeiIvPjxjaXJjbGUgY3g9IjEyIiBjeT0iMTIiIHI9IjMiLz48L3N2Zz4="
                         alt="configuraciones"/>
                    <span id="configuración">Configuración</span>
                </a>
            </li>
            <li>
                <a href="connection/logout.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1sb2ctb3V0Ij48cGF0aCBkPSJNOSAyMUg1YTIgMiAwIDAgMS0yLTJWNWEyIDIgMCAwIDEgMi0yaDQiLz48cG9seWxpbmUgcG9pbnRzPSIxNiAxNyAyMSAxMiAxNiA3Ii8+PGxpbmUgeDE9IjIxIiB4Mj0iOSIgeTE9IjEyIiB5Mj0iMTIiLz48L3N2Zz4="
                         alt="logout"/>
                    <span id="cerrar-sesión">Cerrar sesión</span>
                </a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <!--Buscador/CSS y PHP=finder-->
    <nav class="search">
        <div class="logo-wheryz">
            <img src="img/image2vector.svg" alt="Wheryz">
            <h1 id="wheryz">Wheryz</h1>
        </div>
        <div class="search-box">
            <form action="connection/finder.php" method="post">
                <div class="buscador">
                    <input type="text" id="busqueda" name="busqueda" class="search-input" placeholder="Búsqueda . . ." autocomplete="off"  require>
                    <button type="submit" class="buscar">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zZWFyY2giPjxjaXJjbGUgY3g9IjExIiBjeT0iMTEiIHI9IjgiLz48cGF0aCBkPSJtMjEgMjEtNC4zLTQuMyIvPjwvc3ZnPg==" alt="">
                    </button>
                </div>
            </form>
        </div>
      </nav>
      <!--Contenido-->
      <script>
    function marcarFavorito(element) {
        // Obtener el ID del usuario desde el atributo data-id
        var userId = element.getAttribute('data-id');

        // Realizar una solicitud AJAX para enviar los datos a favoritos.php
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // Manejar la respuesta si es necesario
                console.log(this.responseText);
            }
        };
        
        // Especificar la URL de favoritos.php y los datos a enviar
        xhttp.open("POST", "../connection/favoritos.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("user_id=" + userId);

        // Cambiar el estado del corazón al hacer clic
        if (element.classList.contains('marcado')) {
            element.classList.remove('marcado');
        } else {
            element.classList.add('marcado');
        }
    }
</script>
<?php
// favoritos.php

$servername = "localhost";
$username = "administradores";
$password = "496094";
$dbname = "db_wheryz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];

    // Verificar si el usuario ya está en la lista de favoritos
    $sqlCheck = "SELECT * FROM tb_colaboradores WHERE user_id = $userId";
    $resultCheck = $conn->query($sqlCheck);

    if ($resultCheck->num_rows > 0) {
        // Si el usuario ya está en la lista, eliminarlo
        $sqlDelete = "DELETE FROM tb_colaboradores WHERE user_id = $userId";
        $conn->query($sqlDelete);
        echo "Usuario eliminado de la lista de favoritos";
    } else {
        // Si el usuario no está en la lista, agregarlo
        $sqlInsert = "INSERT INTO tb_colaboradores (user_id) VALUES ($userId)";
        $conn->query($sqlInsert);
        echo "Usuario agregado a la lista de favoritos";
    }
} else {
    // Si la solicitud no es de tipo POST, devolver un error
    echo "Error en la solicitud";
}

$conn->close();
?>


      <div class="content">
        
      </div>
</main>
</body>
</html>