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

			<div class="img_login">
 				<IMG SRC="img/logo_banco.png" class="img_logo">
			</div>

		</div>

		<div class="jumbotron cont_form" >

					<form action="datos_formulario_registro.php" method="post" class="form-horizontal">

					    <div class="form-group">
					        <label class="control-label col-xs-3">Nombre:</label>
					        <div class="col-xs-9">
					            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" maxlength="50"  required>
					        </div>
					    </div>

					   <div class="form-group">
					        <label class="control-label col-xs-3">Apellido:</label>
					        <div class="col-xs-9">
					            <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Apellido"   required>
					        </div>
					    </div>

					    <div class="form-group">
					        <label class="control-label col-xs-3">Telefono:</label>
					        <div class="col-xs-9">
					            <input type="number" class="form-control" name="telefono" id="telefono" placeholder="044-612"  required />
					        </div>
					    </div>

					   <div class="form-group">
					        <label class="control-label col-xs-3">Email:</label>
					        <div class="col-xs-9">
					            <input type="email" class="form-control" name="email" id="emali" placeholder="@exemple.com" maxlength="50" required>
					        </div>
					    </div>

					    <div class="form-group">
					        <label class="control-label col-xs-3">Fecha Nacimiento:</label>
					        <div class="col-xs-3">
					            <select class="form-control"  name="dia" id="dia">
					                 <option>1</option>
					                 <option>2</option>
					                 <option>21</option>

					            </select>
					        </div>
					        <div class="col-xs-3">
					            <select class="form-control" name="mes" id="mes">
					                 <option>1</option>
					                 <option>2</option>
					                 <option>3</option>
					                 <option>4</option>
					                 <option>5</option>
					                 <option>6</option>
					                 <option>7</option>
					                 <option>8</option>
					                 <option>9</option>
					                 <option>10</option>
					                 <option>11</option>
					                 <option>12</option>

					            </select>
					        </div>
					        <div class="col-xs-3">
					            <select class="form-control" name="ano" id="ano">
					                 <option>1995</option>
					                 <option>1996</option>
					                 <option>1963</option>
					            </select>
					        </div>
					    </div>

					    <div class="form-group">
					        <label class="control-label col-xs-3">Dirección:</label>
					        <div class="col-xs-9">
					            <textarea rows="3" class="form-control"  name="direc" id="direc" placeholder="Dirección" maxlength="100"  required></textarea>
					        </div>
					    </div>

					    <div class="form-group">
					        <div class="col-xs-offset-3 col-xs-9">
					            <input type="submit" class="btn btn-primary" value="Registrarse">
					        </div>
					    </div>

				</form>

		</div>
			
	<script src="js/jquery-min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	</body>


</html>