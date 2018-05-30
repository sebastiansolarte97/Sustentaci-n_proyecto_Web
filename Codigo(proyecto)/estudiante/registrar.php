<?php
include '../cone.php';
$identificacion= $_POST["identificacion"];
$nombre= $_POST["nombre_est"];
$nombre2= $_POST["nombre2_est"];
$apellidos= $_POST["apellido_est"];
$apellidos2= $_POST["apellido2_est"];
$id_curso=$_POST["id_curso"];
$id_padresflia=$_POST["id_padresflia"];


$insertar=  "INSERT INTO estudiante(identificacion,nombre_est,nombre2_est,apellido_est,apellido2_est,id_curso,id_padresflia) VALUES ('$identificacion' , '$nombre', '$nombre2' ,'$apellidos' ,'$apellidos2', '$id_curso','$id_padresflia')"; 






$resultado= mysqli_query($conexion, $insertar); 
if (!$resultado) {
	echo "error al registrarse";
}else{
	echo '<script language="javascript">alert("Registro exitoso");</script>'; 
	header("location:ingreso_estudiantes.php");	
	exit;
}





mysqli_close($conexion);