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

		<!--parte de arriba-->
		<div class="parte_superior">

 			<div class="img_login">
 				<IMG SRC="img/logo_banco.png" class="img_logo">
			</div>

			<div class="boton_login">
 				<!--<button type="button" class="btn btn-success" onClick="window.location.href='index.php'">
 						<span class="glyphicon glyphicon-user"></span> Cerrar sesion
 				</button>-->

 				<form name="cerrara_secion" method="post" action="secion_cerrar.php">
 					<button type="submit" name="adios"  class="btn btn-primary" >cerrar secion</button>
 				</form>
			</div>

		</div>

		<!--parte de abajo-->

		<div class="cuadro_inf">

		<!--panel que cubre tdod el panel de los botones -->
				<div class="botones_principal">

						<div class="menu_panel">

									<div class="panel panel-primary">
									  
												  <div class="panel-body">
												    Contenido del panel
												  </div>
												  
												  <div class="panel-footer">
												  	<button type="button" class="btn btn-success" onClick=" window.location.href='muestra_saldo.php' ">
												  			<span class="glyphicon glyphicon-eye-open"></span> Ver Saldo
												  	</button>
												  </div>
												  
												  <div class="panel-footer">
												  	<button type="button" class="btn btn-success" onClick=" window.location.href='restira_saldo.php' ">
												  			<span class="glyphicon glyphicon-usd"></span> Retirara Efectivo
												  	</button>
												  </div>

												  <div class="panel-footer">
												  	<button type="button" class="btn btn-success" onClick=" window.location.href='ingresa_saldo.php' ">
												  			<span class="glyphicon glyphicon-download-alt"></span> Ingresar Efectivo
												  	</button>
												  </div>

												  <div class="panel-footer">
												  	<button type="button" class="btn btn-success" onClick=" window.location.href='index.php' ">
												  			<span class="glyphicon glyphicon-credit-card"></span> Solicitar Prestamo
												  	</button>
												  </div>

								    </div>
				    
						</div>

				</div>


				<div class="info_pricipal">

				</div>


		</div>
		

		<!--panel-->

		<!--panel-->

		


		

	<script src="js/jquery-min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>

</html>