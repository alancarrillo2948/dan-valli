<?php
require_once("config.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redes Sociales</title>
    <link rel="stylesheet" href="css/redes.css"> <!-- Enlace a un archivo CSS para los estilos -->
    <link rel="stylesheet" href="css/galeria.css">
</head>
<body>
    <nav>
        <div class="container">
            <ul class="breadcrumb">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="galeria.php">GALERIA</a></li>
              <li><a href="acerca.php">acerca</a></li>
              <li><a href="sesion.php">iniciar sesion</a></li>
              <li><a href="agenda.php">AGENDA</a></li>
              <li><a class="active" href="#">redes</a></li>
            </ul>
        </div>
      </nav>
      <img src="img/dan valli sin fondo.png" alt="Logo de la empresa" class="logo">

<div class="social-container">
    <h2>Síguenos en nuestras redes sociales:</h2>
    <ul class="social-list">
        <li><a href="https://www.facebook.com/diego.a.navarro.50?locale=es_LA" target="_blank"><img src="img/Facebook sin fondo.png" alt="Facebook" class="logofacebook">Facebook</a></li>
        <br>
        <li><a href="https://www.instagram.com/dan.valli/" target="_blank"><img src="img/instagram sin fondo.png" alt="Instagram" class="logoinstagram">Instagram</a></li>
        <!-- Agrega más redes sociales según sea necesario -->
    </ul>
</div>

</body>
</html>
