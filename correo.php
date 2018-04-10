<?php

$destinatario = "martin-gch@hotmail.com"; 
	$asunto = "Este mensaje es de prueba";
	$cuerpo = ' 
	<html> 
	<head> 
	   <title>datos de cuenta</title> 
	</head> 
	<body> 
	<h1>Hola amigos!</h1> 
	<p> 
	<b>por aqui mandaremos el numero de cuenta y la co0ntraseña
	</p> 
	</body> 
	</html> 
	';  
	
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//dirección del remitente 
	$headers .= "From: Miguel Angel Alvarez <martin-gch@hotmail.com>\r\n"; 

	//dirección de respuesta, si queremos que sea distinta que la del remitente 
	$headers .= "Reply-To: martin-gch@hotmail.com\r\n"; 

	//ruta del mensaje desde origen a destino 
	$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

	//direcciones que recibián copia 
	$headers .= "Cc: martin-gch@hotmail.com\r\n"; 

	//direcciones que recibirán copia oculta 
	$headers .= "Bcc: martin-gch@hotmail.com\r\n"; 

	mail($destinatario,$asunto,$cuerpo,$headers)


?>