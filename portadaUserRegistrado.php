<!DOCTYPE html>
<html>
	<head>
		<title>Pagina de inicio</title>
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="portada.css" />
		<link rel="stylesheet" type="text/css" href="lateral_izquierdo.css" />
		<link rel="stylesheet" type="text/css" href="lateral_derecho.css" />
		<link rel="stylesheet" type="text/css" href="centro.css" />
		
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
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
			
			<div id="contenidoCentralAmpliado">
				<br>
				<img id ="slide" src="img/civilWar.jpg"  width="970" />
				<div id="tituloCentro">
				<h1>OFERTAS</h1>
					<div class="columna">
						<div class="imagenes"><img src="img/peliStarWars.png" width="100" height="133" /></div>
						<div class="precios"><a href="vistaCompra.php"><span class="titulo">Pack Star Wars</span></a><br>
													   <span class="tachado">Antes : 20,50 €</span> <br><br>
													   <span class="precioNuevo">Ahora : 17,50 €!!</span>
						</div>
					</div>
					
					<div class="columna">
						<div class="imagenes"><img src="img/indianajones.png" width="100" height="133" /></div>
						<div class="precios"><a href="vistaCompra.php"><span class="titulo">Indiana Jones y la última cruzada</span></a><br>
													   <span class="tachado">Antes : 20,50 €</span> <br><br>
													   <span class="precioNuevo">Ahora : 17,50 €!!</span>
						</div>
					</div>
			
				<div class="columna">
					<div class="imagenes"><img src="img/her.png" width="100" height="133" /></div>
					<div class="precios"><a href="vistaCompra.php"><span class="titulo">Her</span></a><br>
												   <span class="tachado">Antes : 20,50 €</span> <br><br>
												   <span class="precioNuevo">Ahora : 17,50 €!!</span>
					</div>
				</div>
				
				<div id="clear">
				</div>
				<div class="columna">
					<div class="imagenes"><img src="img/elLegadoDeBourne.png" width="100" height="133" /></div>
					<div class="precios"><a href="vistaCompra.php"><span class="titulo">El legado de Bourne</span></a><br>
												   <span class="tachado">Antes : 20,50 €</span> <br><br>
												   <span class="precioNuevo">Ahora : 17,50 €!!</span>
					</div>
				</div>
				</div>
				<br>
			</div>
			
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
		</div>
		
		
	</body>
</html>