<!DOCTYPE html>
<html>
	<head>
		<title> Comunidad ShareFilm </title>
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="lateral_izquierdo.css" />
		<link rel="stylesheet" type="text/css" href="lateral_derecho.css" />
		<link rel="stylesheet" type="text/css" href="centro.css" />
		<link rel="stylesheet" type="text/css" href="estiloComunidad.css" />
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
			
			<div id="contenedorIzquierdo">
				<h2> MAS VALORADAS </h2>
				<div id="menuScroll">
					<p><span class="titulo">Captain America : The first Avenger </span></p>
					<img src="img/capitanA.jpg" width="150" height="200" />
					<p> <span class="titulo">Matrix </span></p>
					<img src="img/matrix.jpg" width="150" height="200" />
					<p> <span class="titulo">Cadena Perpetua</span></p>
					<img src="img/cadena.jpg" width="150" height="200" />
				</div>
			</div>
			
			<div id="contenidoCentral">
				<div id="tituloCentro">	
					<h1> NOVEDADES AMIGOS </h1>
					
					<div class="novedad">
						<img class="avatarNovedad" src="img/Avatar1.png" width="70" height="70" />
						<p class="textoNovedad">Nick 1 ha comprado <a href="fichaPelicula.php">Her</a> </p>
					</div>
					
					<div class="novedad">
						<img class="avatarNovedad" src="img/avatar2.png" width="70" height="70" />
						<p class="textoNovedad">Nick 2 ha puntuado con 4 sobre 5 a <a href="fichaPelicula.php">El Silencio de los corderos</a> </p>
					</div>
					
					<div class="novedad">
						<img class="avatarNovedad" src="img/avatar3.png" width="70" height="70" />
						<p class="textoNovedad">Nick 3 ha comentado la siguiente <a href="vistaNoticia.php">noticia</a> </p>
					</div>
					
					<div class="novedad">
						<img class="avatarNovedad" src="img/avatar4.png" width="70" height="70" />
						<p class="textoNovedad">Nick 4 sigue a Nick 3 </p>
					</div>
				</div>
			</div>
			
			<div id="contenedorDerecho">
				<h2> USUARIOS POPULARES</h2>
				<form>
					<input required="required" name="buscadorUsuarios" maxlength="50" type="text" placeholder="Nick usuario">
					<button type="submit" id="botonBuscaUsuarios" >BUSCAR</button><br><br>
				</form>
				<div id="menuScroll">
					<div class="usuariosPopulares">
						<img class="avatarPopular" src="img/Avatar1.png"  width="50" height="50"/>
						<a href="perfilAmigo.php" class="nickUsuario"> Nick 1 </a>
						<button class="botonañadirAmigo" type="submit" onclick="window.location.href='';">Seguir</button>
					</div>
				
					<div class="usuariosPopulares">
						<img class="avatarPopular" src="img/avatar2.png"  width="50" height="50"/>
						<a href="perfilAmigo.php" class="nickUsuario"> Nick 2 </a>
						<button class="botonañadirAmigo" type="submit" onclick="window.location.href='';">Seguir</button>
					</div>
				
					<div class="usuariosPopulares">
						<img class="avatarPopular" src="img/avatar3.png"  width="50" height="50"/>
						<a href="perfilAmigo.php" class="nickUsuario"> Nick 3 </a>
						<button class="botonañadirAmigo" type="submit" onclick="window.location.href='';">Seguir</button>
					</div>
				
					<div class="usuariosPopulares">
						<img class="avatarPopular" src="img/avatar4.png"  width="50" height="50"/>
						<a href="perfilAmigo.php" class="nickUsuario"> Nick 4 </a>
						<button class="botonañadirAmigo" type="submit" onclick="window.location.href='';">Seguir</button>
					</div>
				</div>
			</div>
			
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
		</div>
	</body>
</html>