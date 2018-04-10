<?php
	

	include('bancopopular.php');
	session_start();

	if (isset($_POST['veinte'])) {  

		$numero = $_POST['veinte'];
		
	}

	if (isset($_POST['cincuenta'])) {  

		$numero = $_POST['cincuenta'];
		
	}

	if (isset($_POST['cien'])) {  

		$numero = $_POST['cien'];
		
	}


	if (isset($_POST['docientos'])) {

		$numero = $_POST['docientos'];

	}


	if (isset($_POST['quinientos'])) {

		$numero = $_POST['quinientos'];
	 }


	if (isset($_POST['mil'])) { 

		$numero = $_POST['mil'];

	 }

	 $cant= $_SESSION['numcuenta'];

	 $popular = new banco();

	 $popular->deposit($cant,$numero);

	 header('Location: pagina_inicio.php');

	
?>