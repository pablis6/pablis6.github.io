<!DOCTYPE html>
<html>
	<head> 
		<title>Cesta </title>
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="lateral_derecho.css" />
		<link rel="stylesheet" type="text/css" href="centro.css" />
		<link rel="stylesheet" type="text/css" href="estiloCesta.css" />
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
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
			
			<div id="contenidoCentralAmpliado">
				<div id="resumenPedido">
					<div id="caratulaPeli">
						<img src="img/indianajones.png" width="120" height="120" /><br><br>
						<img src="img/cadena.jpg" width="120" height="120" /><br><br>
						<img src="img/silence.jpg" width="120" height="120" />
					</div>
					
					<div id="infoPeli">
						<h3 class="cabeceraInfo"> Indiana Jones y la última cruzada </h3>
						<p class="adicional"> Estado : <span class="estado">En Stock</span></span> </p><br>
						<h3 class="cabeceraInfo"> Cadena perpetua </h3>
						<p class="adicional"> Estado : <span class="estado">En Stock</span></span> </p><br><br>
						<h3 class="cabeceraInfo"> El silencio de los corderos </h3>
						<p class="adicional"> Estado : <span class="estado">En Stock</span></span> </p>
					</div>
					
					<div id="infoPrecio">
						<h3 class="cabeceraInfo"> Precio </h3>
						<p class="adicional"><span class="precioYUnidades">17,50 €</span></p><br>
						<h3 class="cabeceraInfo"> Precio </h3>
						<p class="adicional"><span class="precioYUnidades">17,50 €</span></p><br>
						<h3 class="cabeceraInfo"> Precio </h3>
						<p class="adicional"><span class="precioYUnidades">17,50 €</span></p><br>
					</div>
					
					<div id="infoCantidad">
						<h3 class="cabeceraInfo"> Cantidad </h3>
						<p class="adicional"><span class="precioYUnidades">1</span></p><br>
						<h3 class="cabeceraInfo"> Cantidad </h3>
						<p class="adicional"><span class="precioYUnidades">1</span></p><br>
						<h3 class="cabeceraInfo"> Cantidad </h3>
						<p class="adicional"><span class="precioYUnidades">1</span></p><br>
					</div>
				</div>
			</div>
			
			<div id="contenedorDerecho">
				<p class="precio" > Subtotal <br> (3 elementos) </p>
				<p class="precio"> 52,50 € </p>
				<form>
					<input required="required" name="numeroCuenta" maxlength="50" type="password" placeholder="Número de cuenta"><br><br>
					<button type="submit" id="botonCompra"><div id="carrito"><img src="img/carrito.png" width="30" height="30"/></div><div id="textoBoton">TRAMITAR PEDIDO</div></button>
					<br><br>
				</form>
				<img id="metodos" src="img/metodosPago.png" />
			</div>
				
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
			
		</div>
	</body>
</html>