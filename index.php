<!DOCTYPE html>
<html>
	<head>
		<title>INICIO</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset = 'UTF-8'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>

	<body>


		<div class="parte_superior">

		</div>

		<div class="jumbotron boxlogin">
			
			<form action="iniciarSesion.php"  method="POST" class="formulario_loguin">
			
			    <label for="ejemplo_email_1">Numero de cuenta</label>
			  		<input type="text" class="form-control" name="cuenta" id="cuenta" placeholder="Nombre" required>
			    <label for="ejemplo_password_1">PIN</label>
			    	<input type="password" name="passWord" class="form-control" id="ejemplo_password_1"
			           placeholder="*********" required ><br>
			  <input type="submit" class="btn btn-primary"></input>
			</form><br>

			<address class="text-center">
			  <strong>Aun no tienes cuenta con nosotros que esperas..</strong><br><br>
			  <a href="http://localhost/banco/formulario.php">REGISTRATE</a>
			</address>

		</div>

	<script src="js/jquery-min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>

</html>