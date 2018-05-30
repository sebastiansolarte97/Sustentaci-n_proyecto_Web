<?php
include '../cone.php';
$id_materia= $_POST["id_materia"];
$nota= $_POST["nota"];
$id_curso= $_POST["id_curso"];
$id_estudiante= $_POST["id_estudiante"];



$insertar=  "INSERT INTO estado_academico(id_materia,nota, id_curso,id_estudiante) VALUES ('$id_materia', '$nota' ,'$id_curso', '$id_estudiante' )"; 


$resultado= mysqli_query($conexion, $insertar); 
if (!$resultado) {
	echo "error al registrarse";
}else{
	echo '<script>
	alert("el usuario ya esta registrado")
	</script>'; 
	header("location:ingreso_estado.php");	
	exit;
}


mysqli_close($conexion);