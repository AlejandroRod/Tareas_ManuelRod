<?php
$titulo = "Crear Alumno";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> <?php echo $titulo; ?> </title>
</head>
<body>
	<h1 id="crear_alumno">Crear Alumno</h1>
	
	<div id="menu">
		<?php include ('menu.php'); ?>
	</div>
	
	<form action="insertar_alumno.php" method="POST">
		
		<label for="nombre">nombre</label>
		<input type="text" name="nombre" value="" id="nombre">
		</br>
		<label for="apellido_paterno">apellido paterno</label>
		<input type="text" name="apellido_paterno" value="" id="apellido_paterno">
		</br>
		<label for="apellido_materno">apellido materno</label>
		<input type="text" name="apellido_materno" value="" id="apellido_materno">
		</br>
		<label for="edad">edad</label>
		<input type="text" name="edad" value="" id="edad">
		</br>
		<label for="cuenta">cuenta</label>
		<input type="text" name="cuenta" value="" id="cuenta">
		</br>
		<label for="telefono">teléfono</label>
		<input type="text" name="telefono" value="" id="telefono">
		</br>
		<label for="direccion">dirección</label>
		<input type="text" name="direccion" value="" id="direccion">
		</br>
		<label for="licenciatura">licenciatura</label>
		<input type="text" name="licenciatura" value="" id="licenciatura">
		
		<p><input type="submit" value="Continuar"></p>
	</form>
</body>
</html>