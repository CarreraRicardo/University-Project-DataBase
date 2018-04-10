<?php

$conn = pg_connect("host=localhost port=5432 dbname=banco user=usuario password=inserta");

$account=55567775;

$result = pg_query($conn, "SELECT * FROM vision WHERE numerocuenta ='$account'");

pg_result_seek($result,5);

$row = pg_fetch_row($result);

echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5];



?>