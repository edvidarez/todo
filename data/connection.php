<?php 
$serv="mysql.hostinger.mx";
$database="u234139896_todo";
$user="u234139896_todo";
$pass="t0dol1st";
	$connection=mysqli_connect($serv,$user,$pass,$database);
	if($connection)
	{
		echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
		echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
	}
	else
	{
		echo "No se conecto :(";
	}
	
 ?>