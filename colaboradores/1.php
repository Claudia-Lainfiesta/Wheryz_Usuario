<?php
session_start();
if (!isset($_SESSION['active'])) {
  header('Location: login.php');
}
$id_usuario = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wheryz</title>
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
    <!--CSS GENERAL-->
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/finder.css">
    <!--CSS SOLO DE 1-->
    <link rel="stylesheet" href="../css/1.css">
    <!--JS GENERAl-->
    <script src="../js/nav.js"></script>
    <script src="../js/historial.js"></script>
    <!--JS 1-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

        <img src="../img/logo.jpg" alt="logo" id="titulo" style="width: 50%; margin-left: 20%; margin-bottom:3%; margin-top:3%;">

        <ul>
            <li>
                <a href="../inicio.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1ob21lIj48cGF0aCBkPSJtMyA5IDktNyA5IDd2MTFhMiAyIDAgMCAxLTIgMkg1YTIgMiAwIDAgMS0yLTJ6Ii8+PHBvbHlsaW5lIHBvaW50cz0iOSAyMiA5IDEyIDE1IDEyIDE1IDIyIi8+PC9zdmc+"
                         alt="home"/>
                    <span id="inicio">Inicio</span>
                </a>
            </li>
            <li>
                <a href="../busqueda.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zZWFyY2giPjxjaXJjbGUgY3g9IjExIiBjeT0iMTEiIHI9IjgiLz48cGF0aCBkPSJtMjEgMjEtNC4zLTQuMyIvPjwvc3ZnPg=="
                         alt="busqueda"/>
                    <span id="busqueda">Búsqueda</span>
                </a>
            </li>
            <li>
                <a href="../favoritos.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zdGFyIj48cG9seWdvbiBwb2ludHM9IjEyIDIgMTUuMDkgOC4yNiAyMiA5LjI3IDE3IDE0LjE0IDE4LjE4IDIxLjAyIDEyIDE3Ljc3IDUuODIgMjEuMDIgNyAxNC4xNCAyIDkuMjcgOC45MSA4LjI2IDEyIDIiLz48L3N2Zz4="
                         alt="favoritos"/>
                    <span id="favoritos">Favoritos</span>
                </a>
            </li>
            <li>
                <a href="../reservaciones.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1ib29rLW1hcmtlZCI+PHBhdGggZD0iTTQgMTkuNXYtMTVBMi41IDIuNSAwIDAgMSA2LjUgMkgyMHYyMEg2LjVhMi41IDIuNSAwIDAgMSAwLTVIMjAiLz48cG9seWxpbmUgcG9pbnRzPSIxMCAyIDEwIDEwIDEzIDcgMTYgMTAgMTYgMiIvPjwvc3ZnPg=="
                         alt="reservaciones"/>
                    <span id="reservaciones">Reservaciones</span>
                </a>
            </li>
            <li>
                <a href="../colaborador.php">
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
                <a href="../configuracion.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zZXR0aW5ncyI+PHBhdGggZD0iTTEyLjIyIDJoLS40NGEyIDIgMCAwIDAtMiAydi4xOGEyIDIgMCAwIDEtMSAxLjczbC0uNDMuMjVhMiAyIDAgMCAxLTIgMGwtLjE1LS4wOGEyIDIgMCAwIDAtMi43My43M2wtLjIyLjM4YTIgMiAwIDAgMCAuNzMgMi43M2wuMTUuMWEyIDIgMCAwIDEgMSAxLjcydi41MWEyIDIgMCAwIDEtMSAxLjc0bC0uMTUuMDlhMiAyIDAgMCAwLS43MyAyLjczbC4yMi4zOGEyIDIgMCAwIDAgMi43My43M2wuMTUtLjA4YTIgMiAwIDAgMSAyIDBsLjQzLjI1YTIgMiAwIDAgMSAxIDEuNzNWMjBhMiAyIDAgMCAwIDIgMmguNDRhMiAyIDAgMCAwIDItMnYtLjE4YTIgMiAwIDAgMSAxLTEuNzNsLjQzLS4yNWEyIDIgMCAwIDEgMiAwbC4xNS4wOGEyIDIgMCAwIDAgMi43My0uNzNsLjIyLS4zOWEyIDIgMCAwIDAtLjczLTIuNzNsLS4xNS0uMDhhMiAyIDAgMCAxLTEtMS43NHYtLjVhMiAyIDAgMCAxIDEtMS43NGwuMTUtLjA5YTIgMiAwIDAgMCAuNzMtMi43M2wtLjIyLS4zOGEyIDIgMCAwIDAtMi43My0uNzNsLS4xNS4wOGEyIDIgMCAwIDEtMiAwbC0uNDMtLjI1YTIgMiAwIDAgMS0xLTEuNzNWNGEyIDIgMCAwIDAtMi0yeiIvPjxjaXJjbGUgY3g9IjEyIiBjeT0iMTIiIHI9IjMiLz48L3N2Zz4="
                         alt="configuraciones"/>
                    <span id="configuración">Configuración</span>
                </a>
            </li>
            <li>
                <a href="../connection/logout.php">
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
            <img src="../img/logo-extendido.jpg" alt="Wheryz">
        </div>
        <div class="search-box">
            <form action="../connection/finder.php" method="post">
                <div class="buscador">
                    <input type="text" name="busqueda" class="search-input" placeholder="Búsqueda . . ." autocomplete="off" id="searchInput"  require>
                    <button type="submit" class="buscar" onclick="realizarBusqueda()">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zZWFyY2giPjxjaXJjbGUgY3g9IjExIiBjeT0iMTEiIHI9IjgiLz48cGF0aCBkPSJtMjEgMjEtNC4zLTQuMyIvPjwvc3ZnPg==" alt="">
                    </button>
                </div>
            </form>
        </div>
      </nav>
    <div class="content">
        <div class="mini-content">
            <div class="logo-company">
                <center>
                    <img src="../img/logo.jpg" alt="logo de colaborador">
                </center>
            </div>
            <div class="info-company">
                <div class="name-company">
                    <h1>Wheryz</h1>
                    <img id="agregar-favoritos" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM2MjNEOEYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zdGFyIj48cG9seWdvbiBwb2ludHM9IjEyIDIgMTUuMDkgOC4yNiAyMiA5LjI3IDE3IDE0LjE0IDE4LjE4IDIxLjAyIDEyIDE3Ljc3IDUuODIgMjEuMDIgNyAxNC4xNCAyIDkuMjcgOC45MSA4LjI2IDEyIDIiLz48L3N2Zz4=" alt="icon-fav">
                </div>
                <div class="data-company">
                    <div>
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM2MjNEOEYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1tYXAtcGlubmVkIj48cGF0aCBkPSJNMTggOGMwIDQuNS02IDktNiA5cy02LTQuNS02LTlhNiA2IDAgMCAxIDEyIDAiLz48Y2lyY2xlIGN4PSIxMiIgY3k9IjgiIHI9IjIiLz48cGF0aCBkPSJNOC44MzUgMTRINWExIDEgMCAwIDAtLjkuN2wtMiA2Yy0uMS4xLS4xLjItLjEuMyAwIC42LjQgMSAxIDFoMThjLjYgMCAxLS40IDEtMSAwLS4xIDAtLjItLjEtLjNsLTItNmExIDEgMCAwIDAtLjktLjdoLTMuODM1Ii8+PC9zdmc+" alt="icon">
                        <p>Dirección:</p>
                        <label for="">Info</label>
                    </div>
                    <div>
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM2MjNEOEYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1waG9uZSI+PHBhdGggZD0iTTIyIDE2LjkydjNhMiAyIDAgMCAxLTIuMTggMiAxOS43OSAxOS43OSAwIDAgMS04LjYzLTMuMDcgMTkuNSAxOS41IDAgMCAxLTYtNiAxOS43OSAxOS43OSAwIDAgMS0zLjA3LTguNjdBMiAyIDAgMCAxIDQuMTEgMmgzYTIgMiAwIDAgMSAyIDEuNzIgMTIuODQgMTIuODQgMCAwIDAgLjcgMi44MSAyIDIgMCAwIDEtLjQ1IDIuMTFMOC4wOSA5LjkxYTE2IDE2IDAgMCAwIDYgNmwxLjI3LTEuMjdhMiAyIDAgMCAxIDIuMTEtLjQ1IDEyLjg0IDEyLjg0IDAgMCAwIDIuODEuN0EyIDIgMCAwIDEgMjIgMTYuOTJ6Ii8+PC9zdmc+" alt="icon">
                        <p>Teléfono:</p>
                        <label for="">Info</label>
                    </div>
                    <div>
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM2MjNEOEYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1ib29rLW9wZW4tdGV4dCI+PHBhdGggZD0iTTIgM2g2YTQgNCAwIDAgMSA0IDR2MTRhMyAzIDAgMCAwLTMtM0gyeiIvPjxwYXRoIGQ9Ik0yMiAzaC02YTQgNCAwIDAgMC00IDR2MTRhMyAzIDAgMCAxIDMtM2g3eiIvPjxwYXRoIGQ9Ik02IDhoMiIvPjxwYXRoIGQ9Ik02IDEyaDIiLz48cGF0aCBkPSJNMTYgOGgyIi8+PHBhdGggZD0iTTE2IDEyaDIiLz48L3N2Zz4=" alt="icon">
                        <p>Descripción:</p>
                        <label for="">Info</label>
                    </div>
                    <div>
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM2MjNEOEYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1hbGFybS1jbG9jayI+PGNpcmNsZSBjeD0iMTIiIGN5PSIxMyIgcj0iOCIvPjxwYXRoIGQ9Ik0xMiA5djRsMiAyIi8+PHBhdGggZD0iTTUgMyAyIDYiLz48cGF0aCBkPSJtMjIgNi0zLTMiLz48cGF0aCBkPSJNNi4zOCAxOC43IDQgMjEiLz48cGF0aCBkPSJNMTcuNjQgMTguNjcgMjAgMjEiLz48L3N2Zz4=" alt="icon">
                        <p>Horario:</p>
                        <label for="">Info</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mini-content2">
            <div>
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM2MjNEOEYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1iZWxsLXJpbmciPjxwYXRoIGQ9Ik02IDhhNiA2IDAgMCAxIDEyIDBjMCA3IDMgOSAzIDlIM3MzLTIgMy05Ii8+PHBhdGggZD0iTTEwLjMgMjFhMS45NCAxLjk0IDAgMCAwIDMuNCAwIi8+PHBhdGggZD0iTTQgMkMyLjggMy43IDIgNS43IDIgOCIvPjxwYXRoIGQ9Ik0yMiA4YzAtMi4zLS44LTQuMy0yLTYiLz48L3N2Zz4=" alt="icon">
                <p>Avisos:</p>
            </div>
        <table>
            <thead>
                <tr>
                    <td>Fecha</td>
                    <td>Descripción</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>info</td>
                    <td>info</td>
                </tr>
            </tbody>
        </table>
        </div>
        <br>
        <div class="mini-content2">
            <div>
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM2MjNEOEYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1oZWxwaW5nLWhhbmQiPjxwYXRoIGQ9Im0zIDE1IDUuMTItNS4xMkEzIDMgMCAwIDEgMTAuMjQgOUgxM2EyIDIgMCAxIDEgMCA0aC0yLjVtNC0uNjggNC4xNy00Ljg5YTEuODggMS44OCAwIDAgMSAyLjkyIDIuMzZsLTQuMiA1Ljk0QTMgMyAwIDAgMSAxNC45NiAxN0g5LjgzYTIgMiAwIDAgMC0xLjQyLjU5TDcgMTkiLz48cGF0aCBkPSJtMiAxNCA2IDYiLz48L3N2Zz4=" alt="icon">
                <p>Servicios:</p>
            </div>
        <table>
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td>Costo</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>info</td>
                    <td>info</td>
                    <td>info</td>
                </tr>
            </tbody>
        </table>
        <center>
            <a href="#">
                <button class="reserve">Reservar</button>
            </a>
        </center>
        </div>
    </div>
</main>
    <script>
        $(document).ready(function () {
            $('#agregar-favoritos').on('click', function () {
                var id_usuario = '$id';
                var id_colaborador = 1;
                var isFavorito = $(this).hasClass('favorito');

                $.ajax({
                    url: '../connection/favoritos2.php',
                    type: 'POST',
                    data: {
                        id_usuario: id_usuario,
                        id_colaborador: id_colaborador,
                        isFavorito: isFavorito
                    },
                    success: function (response) {
                        if (isFavorito) {
                            $('#agregar-favoritos').removeClass('favorito');
                            alert('Colaborador eliminado de favoritos.');
                        } else {
                            $('#agregar-favoritos').addClass('favorito');
                            alert('Colaborador agregado a favoritos.');
                        }
                        console.log(response);
                    },
                    error: function (error) {
                        console.error('Error en la solicitud AJAX: ', error);
                    }
                });
            });
        });
    </script>
</body>
</html>

