<?php
	include('bancopopular.php');

	error_reporting(E_ERROR);

	session_start();

		///cachamos los datos del loguin
		$numcuenta =$_POST['cuenta'];
		$pass= $_POST['passWord'];
		
		//abrimos clase banco donde estan los metodos
		$popular = new banco();

		$isCredentials = $popular->IsPassword($numcuenta,$pass);


		if($isCredentials == 1)
		{
			//concexion a base de datos
			$conn = pg_connect("host=localhost port=5432 dbname=banco user=usuario password=inserta");
			///cehcamos si esta ya inicio session
			$result = pg_query($conn, "SELECT estado FROM cuenta WHERE numerocuenta = '$numcuenta'");

			pg_result_seek($result, 0);

			$row = pg_fetch_row($result);

			$res = $row[0];

		

			if ($res == 'f') {

				$_SESSION['numcuenta'] = $numcuenta;



				$query = "UPDATE cuenta SET estado = true WHERE numerocuenta = '$numcuenta'";
				
				pg_query($conn, $query);

				echo " 
                <script language='JavaScript'> 
                alert('Bienvenido'); 
                window.location='pagina_inicio.php';
                </script>";

				
			}
			else{

				//esta logeado
				echo " 
                <script language='JavaScript'> 
                alert('Usuario en linea actualmente'); 
                window.location='index.php';
                </script>";


				//header('Location: index.php');
			}

			
			
		}
		else
		{
			
            echo " 
                <script language='JavaScript'> 
                alert('Usuario o contraseña incorrecta'); 
                window.location='index.php';
                </script>";
		}

	
?>

