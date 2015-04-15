<!DOCTYPE html>
<html>
  
	<head>
		<title>Perfil</title>

		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		
		<link id="estiloLogin" href="estiloUsuario.css" rel="stylesheet" type="text/css" /> 
		<link rel="stylesheet" type="text/css" href="estiloUsuario.css" />
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="lateral_izquierdo.css" />
		<link rel="stylesheet" type="text/css" href="lateral_derecho.css" />
		<link rel="stylesheet" type="text/css" href="centro.css" />
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>  
		<link rel="icon" href="img/logogrande.png" type="image/png">

	</head>
	
	<body>
		<div id= "contenedor">
			
			<!-- Esto es la cabecera -->
			<div id="cabecera">
				<?php include("header.html"); ?>
			</div>
			<!-- -------------------------------->
			
			<!-- Contenedor siguiendo-->
			<div id="contenedorIzquierdo">	
				
				<h2>MI PERFIL</h2>	
				
				<div id ="fondoAvatar" class="colorPerfil">
					<div id="imagenAvatar">
						<img src="img/Avatar1.png" width="45" height="45" />		
					</div>
					
					<div id="tipoLetraAvatar">
						<a href="miPerfil.php">
							Mi_nick
						</a>	
											
					</div>
					<a href="editarPerfil.php"><img  src="img/editar.png" width="32" height="27" /></a>	
				</div>
				
				<button type="submit" id="botonPerfil" onclick="window.location.href='escribirNoticia.php';"><img id="logosPerfil" src="img/escribir.png" width="35" height="35" />Escribir noticia</button>
				<button type="submit" id="botonPerfil" onclick="window.location.href='portada.php';"><img id="logosPerfil" src="img/cerrarsesion.png" width="35" height="35" />cerrar <br>sesión</button>
				
				<div id="menuScroll">
					<div id = "Avatares">
						<div id ="fondoAvatar" class="colorAmigos">
							<div id="imagenAvatar">
								<img src="img/Avatar1.png" width="45" height="45" />		
							</div>
							
							<div id="tipoLetraAvatar">
								<a href="">
									Amigo1
								</a>
									
							</div>
						
							<input id="botonAvatar" type="button" value = "Siguiendo">
						
						</div>
						
						<div id ="fondoAvatar" class="colorAmigos">
							<div id="imagenAvatar">
								<img src="img/Avatar2.png" width="45" height="45" />		
							</div>
							
							<div id="tipoLetraAvatar">
								<a href="">
									Amigo2
								</a>
							</div>
							
							<input id="botonAvatar" type="button" value = "Siguiendo">
						</div>	
						
						<div id ="fondoAvatar" class="colorAmigos">
								<div id="imagenAvatar">
									<img src="img/Avatar3.png" width="45" height="45" />		
								</div>
								
								<div id="tipoLetraAvatar">
									<a href="">
										Amigo3
									</a>
								</div>
								
								<input id="botonAvatar" type="button" value = "Siguiendo">
						</div>	
								
						<div id ="fondoAvatar" class="colorAmigos">
								<div id="imagenAvatar">
									<img src="img/Avatar4.png" width="45" height="45" />		
								</div>
								
								<div id="tipoLetraAvatar">
									<a href="">
										Amigo4
									</a>
								</div>
								
								<input id="botonAvatar" type="button" value = "Siguiendo">
						</div>					
					</div>
				</div>
			</div>
			<!-- -------------------------------->
			
			<!-- Contenedor Peliculas y compradas-->
			<div id="contenidoCentral">
				
				<div id="tituloCentro">
					<h1> VALORADAS POR EL USUARIO </h1>
					
					<div class="columna">
						<div class="imagenes"><img src="img/peliStarWars.png" width="100" height="133" /></div>
						<div class="precios"><a href=""><span class="titulo">Pack Star Wars</span></a><br>
						<input id="botonCompratir" type="button" value = "compartir">
													   
						</div>
					</div>
					
					<div class="columna">
						<div class="imagenes"><img src="img/indianajones.png" width="100" height="133" /></div>
						<div class="precios"><a href="fichaPelicula.php"><span class="titulo">Indiana Jones<br> y la ultima cruzada </span></a><br>
						<input id="botonCompratir" type="button" value = "compartir">
						</div>
					</div>
					
					<div id="clear">
					</div>
				
					<div class="columna">
						<div class="imagenes"><img src="img/her.png" width="100" height="133" /></div>
						<div class="precios"><a href=""><span class="titulo">Her</span></a><br>
							<input id="botonCompratir" type="button" value = "compartir">
						</div>
					</div>
					
					<div class="columna">
						<div class="imagenes"><img src="img/elLegadoDeBourne.png" width="100" height="133" /></div>
						<div class="precios"><a href=""><span class="titulo">El legado de Bourne</span></a><br>
							<input id="botonCompratir" type="button" value = "compartir"> 
						</div>
					</div>
				</div>

				
				<div id="tituloCentro">
					<h1> COMPRADAS POR EL USUARIO </h1>
					
					<div class="columna">
						<div class="imagenes"><img src="img/peliStarWars.png" width="100" height="133" /></div>
						<div class="precios"><a href=""><span class="titulo">Pack Star Wars</span></a><br>
						<input id="botonCompratir" type="button" value = "compartir">
													   
						</div>
					</div>
					
					<div class="columna">
						<div class="imagenes"><img src="img/indianajones.png" width="100" height="133" /></div>
						<div class="precios"><a href=""><span class="titulo">Indiana Jones<br>y la última cruzada</span></a><br>
						<input id="botonCompratir" type="button" value = "compartir">
						</div>
					</div>
				
					<div class="columna">
						<div class="imagenes"><img src="img/her.png" width="100" height="133" /></div>
						<div class="precios"><a href=""><span class="titulo">Her</span></a><br>
							<input id="botonCompratir" type="button" value = "compartir">
						</div>
					</div>
					
					<div class="columna">
						<div class="imagenes"><img src="img/elLegadoDeBourne.png" width="100" height="133" /></div>
						<div class="precios"><a href=""><span class="titulo">El legado de Bourne</span></a><br>
							<input id="botonCompratir" type="button" value = "compartir"> 
						</div>
					</div>
				</div>
			</div>
			<!--Contenedor Peliculas y compradas -------------------------------->
			
			<!-- Contenedor sugerencias-->
			<div id="contenedorDerecho">
				<h2>SUGERENCIAS</h2>
						
				
				<div id="estiloRecomendado">
					<div id="menuScroll">
						<ul>
							<li>	
								<dl>	
									<dt><p> <span class="titulo"> Bourne</span></p></dt> <!--referencia a su ficha en peliculas-->
									<dd><img src="img/elLegadoDeBourne.png" width="115" height="115" />
									<p id="recomendadoPor"> Recomendado por .. </p></dd>
								</dl>
							</li>
							
							<li>	
								<dl>	
									<dt><p> <span class="titulo"> Indiana Jones </span></p></dt> <!--referencia a su ficha en peliculas-->
									<dd><img src="img/indianajones.png" width="115" height="115" />
									<p id="recomendadoPor"> Recomendado por .. </p></dd>
								</dl>
							</li>
							<li>	
								<dl>	
									<dt><p> <span class="titulo"> Indiana Jones </span></p></dt>
									<dd><img src="img/indianajones.png" width="115" height="115" />
									<p id="recomendadoPor"> Recomendado por .. </p></dd>
								</dl>
							</li>
							<li>	
								<dl>	
									<dt><p> <span class="titulo"> Indiana Jones</span></p></dt>
									<dd><img src="img/indianajones.png" width="115" height="115" />
									<p id="recomendadoPor"> Recomendado por .. </p></dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
			
			</div>
			<!--Contenedor sugerencias -------------------------------->
			
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
			
		</div>  <!-- contenedor cierre-->
	  
	</body>
	 
</html>