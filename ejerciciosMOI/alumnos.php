<?php
		include_once ('dbload.php');
$titulo = "Alumnos";
$alumnos = mysql_query("SELECT * FROM alumnos");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> <?php echo $titulo; ?> </title>
</head>
<body>
	<h1 id="hola_mundo">Alumnos</h1>
	
	<div id="menu">
		<?php include ('menu.php'); ?>
	</div>
	
	<div id="alumnos">
	<?php 
		while ($row = mysql_fetch_array($alumnos)){
			echo "<tr>";
			echo "<td>" . $row['nombre'] . " " . $row['apellido_paterno'] . " " . $row['apellido_materno'] . "</td>";
			echo "<td>" . $row['cuenta'] . "</td>";
			echo "<td><a href='eliminar_alumno.php?id".$row['id']."'>Eliminar</a></td>";
		}
	?>
	</div>
	
	<div id="licenciaturas">
	</div>
</body>
</html>