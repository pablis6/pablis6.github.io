<!DOCTYPE html>
<html>
	<head>
		<title>Noticias</title>

		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		
		<link rel="icon" href="img/logogrande.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="centro.css" />
		<link rel="stylesheet" type="text/css" href="estiloNoticias.css" />
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
			<h2 id="titulo"> NOTICIAS </h2>
			
				<div id="noticia" class="contenedorNoticias">
					<div id="imagen"> 
						<img src="img/angel-noticias.png" width="100%" height="100%" /> 
					</div>
					
					<h1><a href="vistaNoticia.php">Bryan Singer confirma que Angel es parte de ‘X-Men: Apocalypse</a></h1>
					
					<div id="datosNoticia">	
						<span class="datos">por <a href="perfilAmigo.php">nick</a> el 1 de Abril, 2015. <a href="vistaNoticia.php#comentarios">9 comentarios</a></span>
					</div>
					
					<span class="datos">
						El mutante alado volverá a aparecer en una película mutante. Esperemos 
						que sea mejor utilizado que en ‘X-Men: The Last Stand’. <br><br> 
						<a href="vistaNoticia.php">Continuar leyendo -> </a>
					</span>
				</div> <!-------------cierre noticias-------------->
				<div id="noticia" class="contenedorNoticias">
				
						<div id="imagen"> 
							<img src="img/star-wars-noticia.png" width="100%" height="100%" /> 
						</div>
						
						<h1><a href="">Las dudas sobre el lanzamiento del próximo tráiler de ‘Star Wars: The Force Awakens’</a></h1>
						
						<div id="datosNoticia">	
							<span class="datos">por <a href="perfilAmigo.php">nick4</a> el 1 de Abril, 2015. <a href="vistaNoticia.php#comentarios">7 comentarios</a></span>
						</div>
						
						<span class="datos">
							Aún no está claro en qué momento podremos ver por primera vez el video en la red. <br><br> 
							<a href="">Continuar leyendo -> </a>
						</span>
				
				</div> <!-------------cierre noticias-------------->
			
				<div id="noticia" class="contenedorNoticias">
					<div id="imagen"> 
						<img src="img/batman3-noticias.png" width="100%" height="100%" /> 
					</div>
					
					<h1><a href="">Adam West y Burt Ward serán Batman y Robin una vez más en una película animada</a></h1>
					
					<div id="datosNoticia">	
						<span class="datos">por <a href="perfilAmigo.php">nick</a> el 1 de Abril, 2015. <a href="vistaNoticia.php#comentarios">19 comentarios</a></span>
					</div>
					
					<span class="datos">
						Como parte de la gran conmemoración que se vendrá el próximo año. <br><br> 
						<a href="">Continuar leyendo -> </a>
					</span>
				</div> <!-------------cierre noticias-------------->
				
			</div> <!-------------cierre noticias-------------->
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
		</div>  <!-------------cierre Contenedor-------------->
	</body>
</html>	