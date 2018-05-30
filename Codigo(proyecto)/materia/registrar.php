<?php
include '../cone.php';
$nombre_mate= $_POST["nombre_mate"];
$id_profesores= $_POST["id_profesores"];





$insertar=  "INSERT INTO materia(nombre_mate,id_profesores) VALUES ('$nombre_mate', '$id_profesores' )"; 


$resultado= mysqli_query($conexion, $insertar); 
if (!$resultado) {
	echo "error al registrarse";
}else{
	echo '<script>
	alert("el usuario ya esta registrado")
	</script>'; 
	header("location:ingreso_materia.php");	
	exit;
}


mysqli_close($conexion);