<?php
		include_once ('dbload.php');
		
		$titulo = "Insertar Alumno";
		$n = $_POST['nombre'];
		$ap = $_POST['apellido_paterno'];
		$am = $_POST['apellido_materno'];
		$e = $_POST['edad'];
		$c = $_POST['cuenta'];
		$t = $_POST['telefono'];
		$d = $_POST['direccion'];
		$l = $_POST['licenciatura'];
		
		mysql_query("INSERT INTO alumnos (nombre,apellido_paterno,apellido_materno,edad,cuenta,telefono,direccion,licenciatura)
			VALUES ('$n','$ap','$am',$e,'$c','$t','$d','$l')");
		
		header('Location:alumnos.php');
?>