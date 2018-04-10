<?php
	
	header('Content-Type: text/html; charset=UTF-8');
	

	class banco
	{
		private $host;
		private $port;
		private $dbName;
		private $credentials;
		private $idNewClient;
		private $cardNumber;
		private $passCardNumber;
		private $isAvailable;
		private $numtargeta;
		private $pass;
		

		/* constructor de la clase banco  que asigna a que base de datos se va a conectar en el gestor PostgreSql*/

		function __construct()
		{
			$this->host = "host=localhost";
			$this->port = "port=5432"; 
			$this->dbName = "dbname=banco";
			$this->credentials="user=usuario password=inserta";
		}

		/* newClient funcion que ejecuta el procedimiento almacenado nuevoCliente y asigna el id al cliente que no esta registrado*/

		public function newClient($name,$mail,$age,$phoneNumber,$address)
		{	
			
			$connectionDB = pg_connect("$this->host $this->port $this->dbName $this->credentials");

			pg_prepare($connectionDB,'tarjeta','SELECT numeroDeCuenta,pass FROM numerosCuentas WHERE disponible=$1');

			$result = pg_execute($connectionDB,"tarjeta",array("TRUE"));

			// para crear un nuevo cliente tiene que haber numero de cuentas disponibles

			if(pg_fetch_row($result) == 0)
			{

				return $this->idNewClient = "No hay cuentas disponibles";

				$this->isAvailable = false;

				exit;
				
			}
			else
			{

				pg_prepare($connectionDB,"nuevo",'SELECT nuevoCliente($1,$2,$3,$4,$5)');

				$preparedStatement = pg_execute($connectionDB,"nuevo",array($name,$mail,$age,$phoneNumber,$address));

				$this->idNewClient = pg_fetch_array($preparedStatement,0,PGSQL_NUM);

				pg_close($connectionDB);

				$this->isAvailable = true;
			}	

		}

		/* Obtiene el idNuevo del cliente que se acaba de registrar en la pagina, para que este 
		id sea pasado y se crea la cuenta nueva con este id */

		public function getIdNewClient()
		{

			if($this->isAvailable == false)
			{


				return $this->idNewClient;



			}
			else if($this->isAvailable == true)
			{
				
				return $this->idNewClient[0];


			}
				

		}


		/*metodo  que devuelve el numero de tarjeta y contraseña cuando se registra un nuevo usuario, recibe como parametro
		el ide del nuevo cliente que se registro*/

		public function newCount($idReferenceNewClient)
		{


			$connectionDB = pg_connect("$this->host $this->port $this->dbName $this->credentials");

			pg_prepare($connectionDB,'tarjeta','SELECT numeroDeCuenta,pass FROM numerosCuentas WHERE disponible=$1');

			$result = pg_execute($connectionDB,"tarjeta",array("TRUE"));


			if(pg_fetch_row($result) == 0)
			{
				return $this->cardNumber = "No hay cuentas disponibles";

				exit;
			}
			else
			{

				$row = pg_fetch_array($result,0,PGSQL_NUM);

				pg_prepare($connectionDB,"ingresaCuenta","SELECT cuentaNueva($1,$2,$3)");

				$countClient = pg_execute($connectionDB,"ingresaCuenta",array($this->cardNumber = $row[0],$this->passCardNumber =$row[1],$idReferenceNewClient));

				$cardAndPass = pg_fetch_array($countClient,0,PGSQL_NUM);


				//acutalizo la tabla que tiene el numero de cuentas disponibles 
				pg_prepare($connectionDB,"usada","UPDATE numerosCuentas SET disponible=$2 WHERE numeroDeCuenta = $1");

				pg_execute($connectionDB,"usada",array($this->cardNumber = $row[0],"FALSE"));


				pg_close($connectionDB);

				// me trae lo del procedimiento almacenado que es una cadena con numero de tarjeta y password 
				return $cardAndPass[0];

				//return "Numero de Tarjeta: ".$this->cardNumber = $row[0]." Password: ".$this->passCardNumber = $row[1];
			}
		}

		public function getCardNumber()
		{

			return $this->cardNumber;
		}

		public function getPassCardNumber()
		{
			return $this->passCardNumber;
		}


		// metodo para depositar ejecuta el procedimiento almacenado

		public function deposit($cardNumberReference,$amount)
		{	


			$connectionDB = pg_connect("$this->host $this->port $this->dbName $this->credentials");

			pg_prepare($connectionDB,"deposita","SELECT depositar($1,$2)");

			$Amount = pg_execute($connectionDB,"deposita",array($cardNumberReference,$amount));

			$newAmount = pg_fetch_array($Amount,0,PGSQL_NUM);

			pg_close($connectionDB);

			return $newAmount[0];
		}


		// metodo para retirar 
		public function withdraw($cardNumberReference,$amount)
		{


			$connectionDB = pg_connect("$this->host $this->port $this->dbName $this->credentials");

			pg_prepare($connectionDB,"retira","SELECT retirar($1,$2)");

			$Amount = pg_execute($connectionDB,"retira",array($cardNumberReference,$amount));

			$newAmount = pg_fetch_array($Amount,0,PGSQL_NUM);

			pg_close($connectionDB);

			return $newAmount[0];

		}

		// metodo para verificar la contraseña
		public function IsPassword($cardNumberReference,$passReference)
		{	


			$connectionDB = pg_connect("$this->host $this->port $this->dbName $this->credentials");

			pg_prepare($connectionDB,"correcta","SELECT pass FROM cuenta WHERE numeroCuenta=$1");

			$isCorrect = pg_execute($connectionDB,"correcta",array($cardNumberReference));

			$passFromDB = pg_fetch_array($isCorrect);

			pg_close($connectionDB);

			if(isset($passFromDB))
			{

				if(md5($passReference) == $passFromDB[0])
				{
					return 1;

					// aqui redireccionas y pasas el numero de cuenta como variable de session
				}
				else
				{
					return 0;
				}


			}
		}

		public function myMoney($cardNumberReference)
		{


			$connectionDB = pg_connect("$this->host $this->port $this->dbName $this->credentials");

			pg_prepare($connectionDB,"misaldo","SELECT consulta($1)");

			$money = pg_execute($connectionDB,"misaldo",array($cardNumberReference));

			$moneyCardNumber = pg_fetch_array($money);

			pg_close($connectionDB);

			return $moneyCardNumber[0];




		}


	}



	/*Pruebas */

	/*$popular = new banco();
	
	$popular->newClient("Jose Perez","perez@gmail.com",30,3085139,"España");

	$paramIdNewCliento = $popular->getIdNewClient();

	echo "ID del nuevo cliente: ".$paramIdNewCliento."<br />";

	

	
	$passAndCard = $popular->newCount($paramIdNewCliento);

	echo $passAndCard."<br />";

	$cuentaR = $popular->getCardNumber();

	$saldoDisponible = $popular->myMoney($cuentaR);

	echo $saldoDisponible."<br />";

	$popular->deposit($cuentaR,500);

	$saldoDisponible = $popular->myMoney($cuentaR);

	echo $saldoDisponible."<br />";

	$retiro = $popular->withdraw($cuentaR,700);

	echo $retiro."<br />";

	 echo $popular->IsPassword($cuentaR,$popular->getPassCardNumber());*/



	


?>