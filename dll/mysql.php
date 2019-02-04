<?php
	include("config.php");
	mysql_set_charset('utf8');
	/*Si no se puede conectar con los 3 datos q se le envia sale error*/

	$link= mysql_connect($db_host, $db_usr, $db_pass) or die('No se pudo conectar a la db'.mysql_error());
	/**/
	mysql_select_db($db_name) or die('No se puede seleccionar la base de datos');
	mysql_set_charset('utf8');

?>