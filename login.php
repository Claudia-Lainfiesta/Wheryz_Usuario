<?php
include 'connection/querys.php';

if (!empty($_POST)) {
  if (
    !empty($_POST['nombre_usuario']) &&
    !empty($_POST["contraseña"])
  ) {
    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];

    if (login($nombre_usuario, $contraseña)) {
      echo '<script type="text/javascript">
                    alert("Usuario y contraseña correcta");
                    window.location.href="inicio.php";
                </script>';
    } else {
      echo '<script type="text/javascript">
                    alert("Usuario o contraseña incorrectos");
                    window.location.href="login.php";
                </script>';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wheryz</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">

    <script src="js/navbar.js" defer></script>
</head>
<body>
    <nav class="options">
      <ul>
        <li class="active2"><a href="">Usuario</a></li>
        <li><a href="">Colaborador</a></li>
      </ul>
    </nav>
        <nav class="navbar">
            <div class="brand-title">
                <img src="img/logo-extendido.jpg" alt="">
            </div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li><a href="index.php">Inicio</a></li>
                <li class="active"><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="registration.php">Registrar</a></li>
              </ul>
            </div>
          </nav>
  <br>
  <br>
    <div class="container">
        <div class="mini-container">
            <div class="titulo">
                <img src="img/logo.jpg" alt="">
                <h2>Iniciar Sesión</h2>
            </div>
            <form method="post">
                <div class="datos">
                    <label for="nombre_usuario">Nombre de usuario</label>
                    <br>
                    <input type="text" name="nombre_usuario" id="nombre_usuario">
                </div>
                <div class="datos">
                    <label for="contraseña">Contraseña</label>
                    <br>
                    <input type="password" name="contraseña" id="contraseña">
                </div>
                <button type="submit" value="Iniciar Sesión">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>