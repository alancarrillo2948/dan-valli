<!DOCTYPE html>
<html lang="es">
<?php
require_once 'config.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/sesion.css"> <!-- Enlace a un archivo CSS para los estilos -->
</head>
<body>

<div class="login-container">
    <div class="container">
        <a href="index.php">Inicio</a>
        <a href="#">Galeria </a>
        <a href="acerca.php">acerca de</a>
    </div>
    <img src="img/dan valli sin fondo.png" alt="Logo de la empresa" class="logo">
    <h2>Iniciar Sesión</h2>
    <form action="procesar_inicio_sesion.php" method="POST">
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
