<?php
include '../cone.php';
$falta= $_POST["falta"];
$fecha= $_POST["fecha"];
$id_curso= $_POST["id_curso"];
$id_estudiante= $_POST["id_estudiante"];



$insertar=  "INSERT INTO llamados_atencion(falta,fecha, id_curso,id_estudiante) VALUES ('$falta', '$fecha' ,'$id_curso', '$id_estudiante' )"; 


$resultado= mysqli_query($conexion, $insertar); 
if (!$resultado) {
	echo "error al registrarse";
}else{
	echo '<script>
	alert("el usuario ya esta registrado")
	</script>'; 
	header("location:ingreso_llamado.php");	
	exit;
}


mysqli_close($conexion);