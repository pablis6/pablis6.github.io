<!DOCTYPE html>
<html>
  
	<head>
		<title>Editar perfil</title>
		
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		
		<link id="estiloLogin" href="estiloLogin.css" rel="stylesheet" type="text/css" /> 
		<link rel="stylesheet" type="text/css" href="headerYpie.css" />
		<link rel="stylesheet" type="text/css" href="estiloLogin.css" />
		<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
		<link rel="icon" href="img/logogrande.png" type="image/png">
		
	</head>
	
	<body>
		
		<div id= "contenedor">
			
			<div id="cabecera">
				<?php include("header.html"); ?>
			</div>
			
			<div id="edicion">
				<p> Edita solo los campos que quieras cambiar, el resto se mantendran intactos</p>
			</div>
			<div id = "editarPerfil">
				<form method="get" action="mailto:sharefilm@gmail.com" enctype="text/plain">
					<fieldset>
						
							<input class = "textField"  name="nick" maxlength="50" type="text" placeholder="nick"><br><br>
							<input class = "textField"  name="pass" maxlength="50" type="password" placeholder="contraseña"><br><br>
							<input class = "textField"  name="nombre" maxlength="50" type="text" placeholder="nombre"><br><br>
							<input class = "textField"  name="apellidos" maxlength="50" type="text" placeholder="apellidos"><br><br>
							<input class = "textField"  name="pais" maxlength="50" type="text" placeholder="pais"><br><br>
							<input class = "textField"  name="ciudad" maxlength="50" type="text" placeholder="ciudad"><br><br>
							<input class = "textField"  name="email" maxlength="50" type="text" placeholder="email"><br><br>
							
							<p>Añadir foto<br><input type="file" name="adjunto" /></p><br>
							
							<input id= "btnReg" value="EDITAR" type="submit">
					</fieldset> 
				</form>
			</div>
			
			<div id="pie">
				<?php include("pie.html"); ?>
			</div>
		
		</div> <!-- contenedor cierre-->
	   
	</body>
	 
</html>