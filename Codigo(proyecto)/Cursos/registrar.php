<?php
include '../cone.php';
$nombre_curso= $_POST["nombre_curso"];


$insertar=  "INSERT INTO cursos(nombre_curso) VALUES ('$nombre_curso')"; 


$resultado= mysqli_query($conexion, $insertar); 
if (!$resultado) {
	echo "error al registrarse";
}else{
	echo '<script>
	alert("el usuario ya esta registrado")
	</script>'; 
	header("location:ingreso_cursos.php");	
	exit;
}


mysqli_close($conexion);