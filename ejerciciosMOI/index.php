<?php
		include_once ('dbload.php');
$titulo = "Hola Mundo";
$licenciaturas = mysql_query("SELECT * FROM licenciaturas");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> <?php echo $titulo; ?> </title>
</head>
<body>
	<h1 id="hola_mundo">Hola Mundo</h1>
	
	<div id="menu">
		<?php include ('menu.php'); ?>
	</div>
	
	<div id="alumnos">
	</div>
	
	<div id="licenciaturas">
	</div>
</body>
</html>