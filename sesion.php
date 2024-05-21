<?php
require_once("config.php");

session_start();

if(isset($_SESSION['usuario'])) {
    echo '<script>alert("Ya hay una sesión iniciada"); window.location.href = "galeria.php";</script>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/sesion.css"> <!-- Enlace a un archivo CSS para los estilos -->
    <link rel="stylesheet" href="css/galeria.css">
</head>
<body>
    <nav>
        <div class="container">
            <ul class="breadcrumb">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="galeria.php">GALERIA</a></li>
              <li><a href="acerca.php">acerca</a></li>
              <li><a class="active" href="#">iniciar sesion</a></li>
              <li><a href="agenda.php">AGENDA</a></li>
              <li><a href="redes.php">redes</a></li>
            </ul>
        </div>
      </nav>
<div class="login-container">
    <img src="img/dan valli sin fondo.png" alt="Logo de la empresa" class="logo">
    <h2>Iniciar Sesión</h2>
    <form action="inicio_sesion.php" method="POST">
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
        </div>
        <button type="submit">Iniciar Sesión</button>
        <br>
        <p>¿No tienes una cuenta? <a href="registro.php">Registrarse</a></p>
    </form>
</div>

</body>
</html>
