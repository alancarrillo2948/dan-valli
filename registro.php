<?php
require_once("config.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!--<link rel="stylesheet" href="css/registros.css">  Enlace a un archivo CSS para los estilos -->
    <link rel="stylesheet" href="css/registros.css">
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
<div class="registro-container">
    <img src="img/dan valli sin fondo.png" alt="Logo de la empresa" class="logo">
    <h2>Registrarse</h2>
    <form action="procesar_registro.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefono:</label>
            <input type="phone" id="phone" name="phone" required>
        </div>
        <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="sesion.php">Iniciar Sesión</a></p>
</div>

</body>
</html>
