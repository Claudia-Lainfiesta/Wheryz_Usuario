<?php
include 'connection/querys.php';

if (!empty($_POST)) {
  if (
    !empty($_POST['user']) &&
    !empty($_POST["password"])
  ) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    if (login($user, $password)) {
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
                <img src="img/image2vector.svg" alt="">
                <h1>Wheryz</h1>
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

    <div class="container">
        <div class="mini-container">
            <div class="titulo">
                <img src="img/image2vector.svg" alt="">
                <h2>Iniciar Sesión</h2>
            </div>
            <form method="post">
                <div class="datos">
                    <label for="user">Nombre de usuario</label>
                    <br>
                    <input type="text" name="user" id="user">
                </div>
                <div class="datos">
                    <label for="password">Contraseña</label>
                    <br>
                    <input type="password" name="password" id="password">
                </div>
                <button type="submit" value="Iniciar Sesión">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>