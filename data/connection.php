<?php 
//$serv="mysql.hostinger.mx";
$serv	  = "31.170.166.58";
$database="u234139896_todo";
$user="u234139896_todo";
$pass="t0dol1st";
	$link=mysqli_connect($serv,$user,$pass,$database);
	if(!$link)
	{
		echo "No se conecto :(";
	}
	
 ?>