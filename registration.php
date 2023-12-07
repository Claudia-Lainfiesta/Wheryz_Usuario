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
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li class="active"><a href="registration.php">Registrar</a></li>
              </ul>
            </div>
          </nav>

    <div class="container">
        <div class="mini-container">
            <div class="titulo">
                <img src="img/logo.jpg" alt="">
                <h2>Registrar</h2>
            </div>
            <form method="Post">
                <div class="datos">
                    <label for="nombre">Nombre</label>
                    <br>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
                <div class="datos">
                    <label for="apellido">Apellido</label>
                    <br>
                    <input type="text" name="apellido" id="apellido" required>
                </div>
                <div class="datos">
                    <label for="nombre_usuario">Nombre de usuario</label>
                    <br>
                    <input type="text" name="nombre_usuario" id="nombre_usuario" required>
                </div>
                <div class="datos">
                    <label for="correo_electrónico">Correo Electrónico</label>
                    <br>
                    <input type="email" name="correo_electrónico" id="correo_electrónico" required>
                </div>
                <div class="datos">
                    <label for="teléfono">Teléfono</label>
                    <br>
                    <input type="number" name="teléfono" id="teléfono" required>
                </div>
                <div class="datos">
                    <label for="contraseña">Contraseña</label>
                    <br>
                    <input type="password" name="contraseña" id="contraseña" required>
                </div>
                <div class="datos">
                    <label for="confirmar_contraseña">Confirmar contraseña</label>
                    <br>
                    <input type="password" name="confirmar_contraseña" id="confirmar_contraseña" required>
                </div>
                <button type="submit" value="Registrarse">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
include 'connection/querys.php';

if (!empty($_POST)) {
  if (
    !empty($_POST['nombre']) &&
    !empty($_POST['apellido']) &&
    !empty($_POST['nombre_usuario']) &&
    !empty($_POST['correo_electrónico']) &&
    !empty($_POST['teléfono']) &&
    !empty($_POST['contraseña']) &&
    !empty($_POST['confirmar_contraseña'])
  ) {
    // Comprobara la contraseña
    if ($_POST['contraseña'] == $_POST['confirmar_contraseña']) {
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $nombre_usuario = $_POST['nombre_usuario'];
      $correo_electrónico = $_POST['correo_electrónico'];
      $teléfono = $_POST['teléfono'];
      $contraseña = $_POST['contraseña'];

      register(
        $nombre,
        $apellido,
        $nombre_usuario,
        $correo_electrónico,
        $teléfono,
        $contraseña
      );

      echo '<script type="text/javascript">
                    alert("Usuario registrado correctamente");
                    window.location.href="login.php";
                </script>';
    } else {
      echo '<script type="text/javascript">
                    alert("Las contraseñas no coinciden");
                    window.location.href="registration.php";
                </script>';
    }
  }
}