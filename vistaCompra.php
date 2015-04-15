<!DOCTYPE html>
<html>
	<head>
		<title>Confirma tu compra</title>
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="lateral_izquierdo.css" />
		<link rel="stylesheet" type="text/css" href="lateral_derecho.css" />
		<link rel="stylesheet" type="text/css" href="centro.css" />
		<link rel="stylesheet" type="text/css" href="estiloVistaCompra.css" />
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
			<br>
			
			<div id="contenidoCentralAmpliado">
				<div id = "tituloCentro">
					<div id="caratula"><img src="img/indianajones.png" width="350" height="400" /></div>
					<div id="infoPeli"> 
						<h3>Indiana Jones y la última cruzada</h3>
						<iframe width="400" height="200" src="https://www.youtube.com/embed/5YbMpOOonJs" frameborder="0" allowfullscreen></iframe>
						
						<div id="Adicional">
							<p> Género : <span id="genero">Aventuras y Acción</span> </p>
							<p> Estado : <span id="estado">En Stock</span></span> </p>
						</div>
					</div>
				</div>
			</div>
			
			<div id="contenedorDerecho">
				<p id="precio"> 17,50 € </p>
				<a href= "tienda.php"><button type="submit" id="botonCompra"><div id="carrito"><img src="img/carrito.png" width="30" height="30"/></div><div id="textoBoton">AÑADIR AL CARRITO</div></button></a>
				<br><br>
				<img id="metodos" src="img/metodosPago.png" />
			</div>
			
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
		</div>
	</body>
</html>