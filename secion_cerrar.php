<?php
session_start();

	if (isset($_POST['adios'])) {  

		$conn = pg_connect("host=localhost port=5432 dbname=banco user=usuario password=inserta");
		
		$cant= $_SESSION['numcuenta'];

		$query = "UPDATE cuenta SET estado =false WHERE numerocuenta = '$cant'";
				
		pg_query($conn, $query);

		header('Location: index.php');

	}

?>