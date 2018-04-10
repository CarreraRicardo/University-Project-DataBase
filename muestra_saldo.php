<?php
	
	include('bancopopular.php');
	session_start();

	$cant= $_SESSION['numcuenta'];

	$popular = new banco();

	$valor = $popular->myMoney($cant);



	
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Saldo actual</title>
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

		<div class="saldo_panel">
			<div class="panel panel-primary">
			  
			  <div class="panel-body">
			    <h4 class="text-center">Saldo actual</h4>
			  </div>
			  
			  <div class="panel-footer">
			  	<table class="table table-condensed">
					<tbody>
					  <tr class="success">
					  	<td class="success">num Cuenta</td>
					  	<td class="success">Total</td>
					  </tr>


					  <tr >
					  	<td ><?php echo $cant;?></td>
					  	<td ><?php echo $valor;?></td>
					  </tr>
					 </tbody>
				</table>
			  </div>
			  
			  <div class="panel-footer">
			  	<button type="button" class="btn btn-primary" onClick=" window.location.href='pagina_inicio.php' ">
			  			<span class="glyphicon glyphicon-chevron-left"></span> Regresar a menu
			  	</button>
			  </div>
			</div>
		</div>

		

	<script src="js/jquery-min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>

</html>