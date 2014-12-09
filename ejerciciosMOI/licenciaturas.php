<?php
		include_once ('dbload.php');
$titulo = "Licenciaturas";
$licenciaturas = mysql_query("SELECT * FROM licenciaturas");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> <?php echo $titulo; ?> </title>
</head>
<body>
	<h1 id="hola_mundo">Licenciaturas</h1>
	
	<div id="menu">
		<?php include ('menu.php'); ?>
	</div>
	
	<div id="alumnos">
	</div>
	
	<div id="licenciaturas">
	<?php 
		while ($row = mysql_fetch_array($licenciaturas)){
			echo "<h3>" .$row['licenciatura']."</h3>";
		}
	?>
	</div>
</body>
</html>