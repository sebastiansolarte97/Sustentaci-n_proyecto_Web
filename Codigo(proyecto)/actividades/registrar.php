<?php
include '../cone.php';
$nombre= $_POST["nombre"];
$fecha= $_POST["fecha"];
$descripcion= $_POST["descripcion"];
$tipo= $_POST["tipo"];




$insertar=  "INSERT INTO actividades(nombre,fecha,descripcion,tipo) VALUES ('$nombre', '$fecha' ,'$descripcion', '$tipo' )"; 


$resultado= mysqli_query($conexion, $insertar); 
if (!$resultado) {
	echo "error al registrarse";
}else{
	echo '<script>
	alert("el usuario ya esta registrado")
	</script>'; 
	header("location:ingreso_actividades.php");	
	exit;
}


mysqli_close($conexion);