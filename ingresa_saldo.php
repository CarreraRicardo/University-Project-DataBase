<!DOCTYPE html>
<head>
		<title>ingresa saldo</title>
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
		</div>

		<div class="menu_panel_dinero">
			<div class="panel panel-primary">
			  
			  <div class="panel-body">
			     <h4 class="text-center">Cantidad a ingresar</h4>
			  </div>
			  
			  <div class="panel-footer">

			  	<form name="cantidad_dinero" method="post" action="cantidad_ingresa.php">
					
					<div class="panelboton">

						<div class="ladoizq">
							<button type="submit" name="cincuenta" value="50"class="btn btn-primary" >50</button>
						</div>

						<div class="ladode">
							
							<button type="submit" name="veinte" value="20"class="btn btn-primary" >20</button>
						</div>
						
					</div>

					<div class="panelboton">

						<div class="ladoizq">
							<button type="submit" name="docientos" value="200"class="btn btn-primary">200</button>
						</div>

						<div class="ladode">
							
							<button type="submit" name="cien" value="100"class="btn btn-primary" >100</button>
						</div>
						
					</div>

					<div class="panelboton">

						<div class="ladoizq">
							<button type="submit" name="mil" value="1000"class="btn btn-primary">1000</button>
						</div>

						<div class="ladode">
							<button type="submit" name="quinientos" value="500"class="btn btn-primary">500</button>
						</div>
						
					</div>

				</form>
			
			  </div>

			  <div class="panel-footer">
			  	<div class="boton_canc">
						<button type="button" class="btn btn-danger" onClick=" window.location.href='pagina_inicio.php' ">
							<span class="glyphicon glyphicon-ban-circle"></span> Cancelar
						</button>
			  	</div>
			  </div>


			</div>
		</div>

		

	<script src="js/jquery-min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>

</html>