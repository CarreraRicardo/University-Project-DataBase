<?php
	
	include('bancopopular.php');
	require_once('PHPMailer-master/PHPMailerAutoload.php');


	function CalculaEdad( $fecha ) {
    list($Y,$m,$d) = explode("-",$fecha);
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
	}

	//datos del formulario
	$nombre = $_POST['nombre'];
	$Apellido = $_POST['Apellido'];
	$tel = $_POST['telefono'];
	$correo = $_POST['email'];
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	$direccion = $_POST['direc'];

	//scamos la edad con los datos dia mes y año
	$fecha = $ano."-".$mes."-".$dia;
	$edad = CalculaEdad($fecha);

	//concatenamos en una variable el nombre y apellido
	$nom = $nombre." ".$Apellido;

	//metdod nuevo cliente
	$popular = new banco();
	
	$popular->newClient($nom,$correo,$edad,$tel,$direccion);
	
	$paramIdNewCliento = $popular->getIdNewClient();

	$passAndCard = $popular->newCount($paramIdNewCliento);

	$mail = new PHPMailer();

	//indico a la clase que use SMTP
	$mail->IsSMTP();
	//permite modo debug para ver mensajes de las cosas que van ocurriendo
	//$mail->SMTPDebug = 2;
	//Debo de hacer autenticación SMTP
	$mail->SMTPAuth = true;

	$mail->SMTPSecure = "ssl";
	//indico el servidor de Gmail para SMTP
	$mail->Host = "smtp.gmail.com";
	//indico el puerto que usa Gmail
	$mail->Port = 465;
	//indico un usuario / clave de un usuario de gmail
	$mail->Username = "proyectoyasuo9@gmail.com";

	$mail->Password = "riseeg12345";

	$mail->SetFrom('proyectoyasuo9@gmail.com', 'Banco Popular');
	//$mail->AddReplyTo("proyectoyasuo9@gmail.com","Ricardo");

	$mail->Subject = "Numero de cuenta y password";

	$mail->MsgHTML("Le proporcionamos su numero de cuenta y password para que pueda hacer login en nuestra pagina<br/>".$passAndCard);
	//indico destinatario
	$address = $correo;

	$mail->AddAddress($address,$nombre.$Apellido);

	$mail->Send();

	$mail->SmtpClose();


	echo " 
                <script language='JavaScript'> 
                alert('Registro Exitoso, se le ha enviado un correo con su información'); 
                window.location='index.php';
                </script>";


	/*
	echo "ID del nuevo cliente: ".$paramIdNewCliento."<br />";

	$passAndCard = $popular->newCount($paramIdNewCliento);

	echo $passAndCard."<br />"; */




	//echo "nombre completo: ".$nom."<br>";
	//echo "tu nombre es: ".$nombre." ".$Apellido."<br>";
	//echo "tu edad es: ".$edad."<br>";
	//echo "telefono: ".$tel."<br>";
	//echo "direccion de correo electronico: ".$mail."<br>";
	//echo "direccion: ".$direccion."<br>";
	


	


?>
