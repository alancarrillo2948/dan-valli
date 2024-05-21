<?php
require_once("config.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Citas</title>
    <link rel="stylesheet" href="css/agenda.css"> <!-- Enlace a un archivo CSS para los estilos -->
    <link rel="stylesheet" href="css/acerca.css">
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
              <li><a class="active" href="#">AGENDA</a></li>
              <li><a href="redes.php">redes</a></li>
            </ul>
        </div>
    </nav>
      <img src="img/dan valli sin fondo.png" alt="Logo de la empresa" class="logo">
    
      <div class="container">
        <h1>Agenda de Citas</h1>
        <form action="agendar_cita.php" method="POST">
          <label for="fecha">Fecha:</label>
          <input type="date" id="fecha" name="fecha" required>
          <label for="hora">Hora:</label>
          <input type="time" id="hora" name="hora" required>
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>
          <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" name="telefono" required>
          <label for="telefono">correo:</label>
          <input type="email" id="correo" name="correo" required>
          <button type="submit">Agendar</button>
        </form>
        <div class="citas">
          <!-- Aquí se mostrarán las citas agendadas -->
        </div>
      </div>
</body>
</html>
