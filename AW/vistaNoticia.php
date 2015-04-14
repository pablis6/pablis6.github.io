<!DOCTYPE html>
<html>
	<head>
		<title>Noticia</title>

		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="centro.css" />
		
		<link rel="stylesheet" type="text/css" href="estiloNoticias.css" />
		
		<link rel="stylesheet" type="text/css" href="estiloVistaNoticia.css" />
		
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
			
			<div id="contenedorNoticias">
				<div id="noticia" class="vistaNoticia">
					<h1>Bryan Singer confirma que Angel es parte de ‘X-Men: Apocalypse'</h1>
					
					<div id="vistaEntradilla">
						<span class="datos">
							El mutante alado volverá a aparecer en una película mutante. Esperemos 
							que sea mejor utilizado que en ‘X-Men: The Last Stand’. 
						</span>
					</div>
					
					<div id = "datosNoticia" class="datosVista">	
						<span class="datos">por: <a href="perfilAmigo.php">Nick4</a> <hr/>
						el 1 de Abril, 2015.</span>
					</div>
					
					<img id ="imgNoticia" src="img/angel-noticias.png" />
					
					<p>A través de una imagen en Instagram, el director<strong> Bryan Singer</strong> 
					reveló el primer vistazo a arte conceptual relacionado al mutante alado Angel, quien será parte de <em><strong>X-Men: Apocalypse</strong></em>. 
					La imagen en cuestión muestra al personaje atrapado en una gran jaula de pájaro, mientras la audiencia en teatro ve al joven mutante en exhibición.
					</p>
					
					<p>Aunque no hay ningún actor que esté oficialmente elegido para el el, el mes pasado se informó que el británico 
					Ben Hardy se sumará al elenco en un rol desconocido. Y si uno ve sus fotos, es claro que calza con la idea de que interprete a <strong>Warren Worthington III</strong>.
					</p>
					
					<hr/>
					<a name=comentarios>
					<div id="contenedorComentarios">
						<h1><em>Comentarios</em></h1>
						<div id="comentar" class="comentario">
							
							<div id="infoComentario">
								<!-- <input id="botonAvatar" type="button" value = "responder"> -->
								<img src="img/Avatar1.png" width="50" height="50" />
								<a href="perfilAmigo.php">Carlos Jaynor</a>
								<p>2 abril, 2015 at 21:29</p>
							</div>
							
							<div id="estiloComentario">
								<p>HOLAAAAA  bla bla bla bla blaa blablabla bla bla bla bla bla blaa blablabla bla 
								bla bla bla bla blaa blablabla bla bla bla bla bla blaablablabla bla bla bla bla bla blaa 
								blaablablabla bla bla bla bla bla blaa</p>
							</div>
						</div>
						
						<div id="comentar" class="comentario">
							
							<div id="infoComentario">
								<!-- <input id="botonAvatar" type="button" value = "responder"> -->
								<img src="img/Avatar4.png" width="50" height="50" />
								<a href="perfilAmigo.php">Claudio60</a>
								<p>1 abril, 2015 at 17:00</p>
							</div>
							
							<div id="estiloComentario">
								<p>blablabla bla bla bla bla bla blaa blablabla bla bla bla bla bla blaa blablabla bla 
								bla bla bla bla blaa blablabla bla bla bla bla bla blaablablabla bla bla bla bla bla blaa 
								blaablablabla bla bla bla bla bla blaa</p>
							</div>
							
						</div>
						
						<div id="comentar">
							<form action="vistaNoticia.html" method="GET">
								<textarea rows="6" cols="65" id="texto" name="comentario" value="" placeholder="Deja aqui tu comentario"></textarea>
								</br>
								<button id="enviar" type="submit">Enviar</button> 
								<button id="Limpiar" type="reset">Limpiar</button>
							</form>
						</div>
						
					
					</div>
				</div>
			
	
			
			</div>
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
			
		</div>
	</body>

</html>