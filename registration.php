<?php
include 'connection/querys.php';
if (!empty($_POST)) {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['lastname']) &&
        !empty($_POST['user']) &&
        !empty($_POST['email']) &&
        !empty($_POST['password'])
    ) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        register($name, $lastname, $user, $email, $password);
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
    <link rel="shortcut icon" href="img/image2vector.svg" type="image/x-icon">

    <script src="js/navbar.js" defer></script>
</head>
<body>
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
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li class="active"><a href="registration.php">Registrar</a></li>
              </ul>
            </div>
          </nav>

    <div class="container">
        <div class="mini-container">
            <div class="titulo">
                <img src="img/image2vector.svg" alt="">
                <h2>Registrar</h2>
            </div>
            <form method="Post">
                <div>
                    <label for="name">Nombre</label>
                    <br>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="">Apellido</label>
                    <br>
                    <input type="text" name="lastname" id="lastname">
                </div>
                <div>
                    <label for="">Nombre de usuario</label>
                    <br>
                    <input type="text" name="user" id="user">
                </div>
                <div>
                    <label for="">Correo Electrónico</label>
                    <br>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="">Contraseña</label>
                    <br>
                    <input type="password" name="password" id="password">
                </div>
                <button type="submit" value="Registrarse">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>