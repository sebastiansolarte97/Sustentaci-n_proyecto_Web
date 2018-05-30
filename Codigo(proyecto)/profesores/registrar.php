<?php
include '../cone.php';

$identificacion= $_POST["identificacion"];
$nombre= $_POST["nombre_1"];
$nombre2= $_POST["nombre_2"];
$apellidos= $_POST["apellido_1"];
$apellidos2= $_POST["apellido_2"];
$num_cel= $_POST["num_cel"];
$cargo_aca= $_POST["cargo_aca"];

$insertar=  "INSERT INTO profesores(identificacion,nombre_1,nombre_2, apellido_1,apellido_2, num_cel, cargo_aca) VALUES ( '$identificacion', '$nombre', '$nombre2' ,'$apellidos' ,'$apellidos2', '$num_cel', '$cargo_aca')"; 



$verificar_cedula= mysqli_query($conexion, "SELECT * FROM  profesores WHERE identificacion = '$identificacion' ");
if (mysqli_num_rows($verificar_cedula)> 0) {
	echo '<script>

	alert("la cedula ya esta registrada")
	</script> 

	';
	
	exit;

}



$resultado= mysqli_query($conexion, $insertar); 
if (!$resultado) {
	echo "error al registrarse";
}else{
	echo '<script>
	alert("el usuario ya esta registrado")
	</script>'; 
	header("Location: ../personal.php");		
	exit;
}





mysqli_close($conexion);