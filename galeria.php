<?php
require_once("config.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Fotos</title>
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="js/galeria.js">
    <link rel="stylesheet" href="css/acerca.css">
	<link rel="stylesheet" href="css/registros.css">
	<!-- iconos bosstrap-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
	<script src="app.js"></script>
  <nav>
    <div class="container">
        <ul class="breadcrumb">
          <li><a href="index.php">Inicio</a></li>
          <li><a class="active" href="#">GALERIA</a></li>
          <li><a href="acerca.php">acerca</a></li>
          <li><a href="sesion.php">iniciar sesion</a></li>
          <li><a href="agenda.php">AGENDA</a></li>
          <li><a href="redes.php">redes</a></li>
        </ul>
    </div>
  </nav>
  <img src="img/dan valli sin fondo.png" alt="Logo de la empresa" class="logo">
  
	<h1>Galería de imágenes</h1>
	<ul class="galeria">
		<li><a href="#serpiente"><img src="img/serpiente.png"></a>
		</li>
		<li><a href="#perrito"><img src="img/perrito.png"></a>
		</ul>
  	<ul class="galeria">
		<li><a href="#img1"><img src="img/tatto.png"></a>
		</li>
		<li><a href="#img2"><img src="img/mario.png"></a>
		</li>
		<li><a href="#img3"><img src="img/jirafa.png"></a>		  
		</li>
		<li><a href="#img4"><img src="img/tatto2.png"></a>
		</li>
	</ul>

	
	<div class="modal" id="serpiente">
		<h3>galeria</h3>
		<div class="imagen">
			<a href="#img4">&#60;</a>
			<a href="#img2"><img src="img/serpiente.png"></a>
			<a href="#perrito">></a>
			<div class="registro-container">
				<p>ligera la mano y rapido y muy agradable al momento de dar las indicaciones para el cuidado del tatuaje</p>
			</div>
		</div>
		<a class="cerrar" href="">X</a>
	</div>

	
	<div class="modal" id="perrito">
		<h3>galeria</h3>
		<div class="imagen">
			<a href="#serpiente">&#60;</a>
			<a href="#perrito"><img src="img/perrito.png"></a>
			<a href="#angel">></a>
			<div class="registro-container">
				<p>ligera la mano y rapido y muy agradable al momento de dar las indicaciones para el cuidado del tatuaje</p>
			</div>
		</div>
		<a class="cerrar" href="">X</a>
	</div>

	<div class="modal" id="perrito">
		<h3>galeria</h3>
		<div class="imagen">
			<a href="#perroto">&#60;</a>
			<a href="#"><img src="img/angel.png"></a>
			<a href="#tatto3">></a>
			<div class="registro-container">
				<p>ligera la mano y rapido y muy agradable al momento de dar las indicaciones para el cuidado del tatuaje</p>
			</div>
		</div>
		<a class="cerrar" href="">X</a>
	</div>

	<div class="modal" id="img1">
		<h3>galeria</h3>
		<div class="imagen">
			<a href="#img4">&#60;</a>
			<a href="#img2"><img src="img/tatto.png"></a>
			<a href="#img2">></a>
			<div class="registro-container">
				<p>ligera la mano y rapido y muy agradable al momento de dar las indicaciones para el cuidado del tatuaje</p>
			</div>
		</div>
		<a class="cerrar" href="">X</a>
	</div>
	
	<div class="modal" id="img2">
		<h3>galeria</h3>
		<div class="imagen">
			<a href="#img1">&#60;</a>
			<a href="#img3"><img src="img/mario.png"></a>
			<a href="#img3">></a>
		</div>
		<a class="cerrar" href="">X</a>
	</div>
	
	<div class="modal" id="img3">
		<h3>galeria</h3>
		<div class="imagen">
			<a href="#img2">&#60;</a>
			<a href="#img4"><img src="img/jirafa.png"></a>
			<a href="#img4">></a>
		</div>
		<a class="cerrar" href="">X</a>
	</div>
	
	<div class="modal" id="img4">
		<h3>galeria</h3>
		<div class="imagen">
			<a href="#img3">&#60;</a>
			<a href="#img1"><img src="img/tatto2.png"></a>
			<a href="#serpiente">></a>
		</div>
		<a class="cerrar" href="">X</a>
	</div>
</html>
