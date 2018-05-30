<?php
include '../cone.php';
$identificacion= $_POST["identificacion"];
$nombre= $_POST["nombre_1"];
$nombre2= $_POST["nombre_2"];
$apellidos= $_POST["apellido_1"];
$apellidos2= $_POST["apellido_2"];
$num_cel= $_POST["num_cel"];



$insertar=  "INSERT INTO padresflia(identificacion,nombre_1,nombre_2, apellido_1,apellido_2, num_cel) VALUES ( '$identificacion','$nombre', '$nombre2' ,'$apellidos' ,'$apellidos2', '$num_cel')"; 


$resultado= mysqli_query($conexion, $insertar); 
if (!$resultado) {
	echo "error al registrarse";
}else{
	echo '<script>
	alert("el usuario ya esta registrado")
	</script>'; 
	header("location:ingreso_padres.php");	
	exit;
}
	//echo "Usuario registrado exitosamente"; 




mysqli_close($conexion);