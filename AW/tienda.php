<!DOCTYPE html>
<html>
	<head>
		<title>Tienda ShareFilm</title>
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="lateral_izquierdo.css" />
		<link rel="stylesheet" type="text/css" href="lateral_derecho.css" />
		<link rel="stylesheet" type="text/css" href="centro.css" />
		<link rel="stylesheet" type="text/css" href="tienda.css" />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		<link rel="icon" href="img/logogrande.png" type="image/png">
	</head>
	<body>
		<div id="contenedor">
			<div id="cabecera">
				<?php include("header.html"); ?>
			</div>
			
			<div id="contenedorIzquierdo">
				<h2>TOP PELICULAS</h2>
				<div id="menuScroll">
					<p><span class="titulo">Captain America : The first Avenger </span></p>
					<img src="img/capitanA.jpg" width="150" height="200" />
					<p> <span class="titulo">Matrix </span></p>
					<img src="img/matrix.jpg" width="150" height="200" />
					<p> <span class="titulo">Cadena Perpetua</span></p>
					<img src="img/cadena.jpg" width="150" height="200" />
					<p> <span class="titulo">El caballero oscuro</span></p>
					<img src="img/darkknight.jpg" width="150" height="200" />
					<p> <span class="titulo">Pulp Fiction</span></p>
					<img src="img/pulp.jpg" width="150" height="200" />
					<p> <span class="titulo">El club de la lucha</span></p>
					<img src="img/fight.jpg" width="150" height="200" />
					<p> <span class="titulo">El imperio coontrataca </span></p>
					<img src="img/empire.jpg" width="150" height="200" />
					<p> <span class="titulo">Origen</span></p>
					<img src="img/inception.jpg" width="150" height="200" />
					<p> <span class="titulo">Sospechosos habituales</span></p>
					<img src="img/usual.jpg" width="150" height="200" />
					<p> <span class="titulo">El silencio de los corderos</span></p>
					<img src="img/silence.jpg" width="150" height="200" />	
				</div>
			</div>
			
			<div id="contenidoCentral">
				<div id="tituloCentro">	
				<h1> CONTENIDO DE LA TIENDA </h1>
					<div class="columna">
						<div class="imagenes"><img src="img/peliStarWars.png" width="100" height="133" /></div>
						<div class="precios"><a href="vistaCompra.php"><span class="titulo">Pack Star Wars</span></a><br>
							<button type="submit" id="botonCompra"><div id="carrito"><img src="img/carrito.png" width="30" height="30"/></div><div id="textoBoton">AÑADIR AL CARRITO</div></button>
													   
						</div>
					</div>
					
					<div class="columna">
						<div class="imagenes"><img src="img/indianajones.png" width="100" height="133" /></div>
						<div class="precios"><a href="vistaCompra.php"><span class="titulo">Indiana Jones y la última cruzada</span></a><br>
							<button type="submit" id="botonCompra"><div id="carrito"><img src="img/carrito.png" width="30" height="30"/></div><div id="textoBoton">AÑADIR AL CARRITO</div></button>
						</div>
					</div>
					
				<div id="clear">
				</div>
				
					<div class="columna">
						<div class="imagenes"><img src="img/her.png" width="100" height="133" /></div>
						<div class="precios"><a href="vistaCompra.php"><span class="titulo">Her</span></a><br>
							<button type="submit" id="botonCompra"><div id="carrito"><img src="img/carrito.png" width="30" height="30"/></div><div id="textoBoton">AÑADIR AL CARRITO</div></button>
						</div>
					</div>
					
					<div class="columna">
						<div class="imagenes"><img src="img/elLegadoDeBourne.png" width="100" height="133" /></div>
						<div class="precios"><a href="vistaCompra.php"><span class="titulo">El legado de Bourne</span></a><br>
							<button type="submit" id="botonCompra"><div id="carrito"><img src="img/carrito.png" width="30" height="30"/></div><div id="textoBoton">AÑADIR AL CARRITO</div></button>
						</div>
					</div>
				</div>
				
			</div>
			
			<div id="contenedorDerecho">
				<h2> MI CESTA </h2>
				<button type="submit" id="botonCesta" onclick="window.location.href='vistaCesta.php';"/><img src="img/carrito.png" width="60" height="60"><p> 3 ELEMENTOS</p></button>
			</div>
				
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
			
		</div>
	</body>
</html>