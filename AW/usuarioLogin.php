<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<link id="estiloLogin" href="estiloLogin.css" rel="stylesheet" type="text/css" /> 
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		<link rel="icon" href="img/logogrande.png" type="image/png">
	</head>
  
	<body>
		<div id= "contenedor">
			<div id="cabecera">
				<?php include("header.html"); ?>
			</div>
			
				
				<div id="Bienvenido">
					<h1> Bienvenido a ShareFilms. </h1>
					<p> Registrandote con nosotros podrás comprar peliculas, valorarlas y recomendarselas a tus amigos!</p>
				</div>
			
				<div id ="hueco">
					<p> </p>
				</div>
				
				<div id = "login">
					<form method="get" action="miPerfil.php" enctype="text/plain">
						<fieldset>
							
								<img src="img/usuarioTrans.png" width="35%"> <br>
								<input class = "textField" required="required" name="nick" maxlength="50" type="text" placeholder="nick"><br><br>
								<input class = "textField" required="required" name="pass" maxlength="50" type="password" placeholder="contraseña"><br><br>
								<a href="miPerfil.php"><input id = "btnLog" value="LOGIN" type="submit"></a>
						</fieldset> 
					</form>
				</div>
				
				<div id = "registro">
					<form method="get" action="miPerfil.php" enctype="text/plain">
						<fieldset>
							
								<input class = "textField" required="required" name="nick" maxlength="50" type="text" placeholder="nick"><br><br>
								<input class = "textField" required="required" name="pass" maxlength="50" type="password" placeholder="contraseña"><br><br>
								<input class = "textField" required="required" name="nombre" maxlength="50" type="text" placeholder="nombre"><br><br>
								<input class = "textField" required="required" name="apellidos" maxlength="50" type="text" placeholder="apellidos"><br><br>
								<input class = "textField" required="required" name="pais" maxlength="50" type="text" placeholder="pais"><br><br>
								<input class = "textField" required="required" name="ciudad" maxlength="50" type="text" placeholder="ciudad"><br><br>
								<input class = "textField" required="required" name="email" maxlength="50" type="text" placeholder="email"><br><br>
								
								<p>Añadir foto<br><input type="file" name="adjunto" /></p><br>
								
								<input id= "btnReg" value="REGISTRAR" type="submit">
						</fieldset> 
					</form>
				</div>
				
				<div id ="hueco">
				
				</div>
			
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
		</div>
	</body>
</html>
