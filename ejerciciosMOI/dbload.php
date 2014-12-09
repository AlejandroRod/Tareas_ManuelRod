	<?php 
	//Conectar una base de datos local|usuario|contraseña
	$link = mysql_connect('localhost', 'root', 'root');
	if (!$link) {
    	die('Not connected : ' . mysql_error());
	}
	$db = mysql_select_db("PruebaG", $link);
	mysql_set_charset('utf8', $link);
	?>