<!DOCTYPE html>
<html>
	<head>
		<title>Ficha de la pelicula</title>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="estiloPeliculas.css" />
		
		<link rel="icon" href="img/logogrande.png" type="image/png">
		
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<div id="contenedor">
			<div id="cabecera">
				<?php include("header.html"); ?>
			</div>
			
			<div id="ficha_pelicula">
				<div id="imagenFicha">
					<img height="290px" width="210px" src="img/ultima_cruzada.png"/>
				</div>
				
				<div id="datos_Pelicula">
					<h1>Indiana Jones y la última cruzada</h1>
					<p><strong>Dirigido por: </strong>Steven Spielberg</p>
					<p><strong>Genero: </strong><a href="">Aventura</a>. <a href="">Acción</a>. <a href="">Nazismo</a>. <a href="">Años 30</a>. </p>
					<p><strong>Reparto mas principal:</strong>
						<a href="http://es.wikipedia.org/wiki/Harrison_Ford"  target="_blank">Harrison Ford</a>, 
						<a href="http://es.wikipedia.org/wiki/Sean_Connery"  target="_blank">Sean Connery</a>, 
						<a href="http://es.wikipedia.org/wiki/Alison_Doody"  target="_blank">Alison Doody</a>, 
						<a href="http://es.wikipedia.org/wiki/Denholm_Elliott" target="_blank">Denholm Elliott</a>.
					
					</p>
					<strong>Sinopsis:</strong>
					<p>En esta tercera entrega, el padre del protagonista (Harrison Ford), Henry Jones, también
					arqueólogo (Sean Connery), es secuestrado cuando buscaba el Santo Grial. Indiana tendrá que 
					ir a rescatarlo y, de paso, intentar hacerse con la preciada reliquia, que también ambicionan los nazis.
					</p>
				</div>
				
				<div id="votos_boton">
						<img  width="25px" src="img/logo.png"/>
						<img  width="25px" src="img/logo.png"/>
						<img  width="25px" src="img/logo.png"/>
						<img  width="25px" src="img/logo.png"/>
						<img  width="25px" src="img/logonoseleccionado.png"/>
				<a href="vistaCompra.php"><button type="submit" id="boton_comprar">COMPRAR</button></a>
				</div>
				
			</div>
		
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
			
		</div>
		
		
		
	</body>	
</html>	