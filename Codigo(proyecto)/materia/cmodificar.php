<?php

	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'diaro');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['id_materia'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['nombre_mate'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['nombre_pro'])){
			$errors[] = "Nombre vacío";

		}else if (empty($_POST['apellido_pro'])){
			$errors[] = "Apellido vacío";
		}else if (
			!empty($_POST['id_materia']) &&
			!empty($_POST['nombre_mate']) && 
			!empty($_POST['nombre_pro']) &&
			!empty($_POST['apellido_pro']) 

			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombre_mate=mysqli_real_escape_string($con,(strip_tags($_POST["nombre_mate"],ENT_QUOTES)));
		$nombre_pro=mysqli_real_escape_string($con,(strip_tags($_POST["nombre_pro"],ENT_QUOTES)));
		$apellido_pro=mysqli_real_escape_string($con,(strip_tags($_POST["apellido_pro"],ENT_QUOTES)));
		$id_materia=intval($_POST['id_materia']);
		$sql="UPDATE materia SET nombre_mate='".$nombre_mate."',nombre_pro='".$nombre_pro."', apellido_pro='".$apellido_pro."' WHERE id_materia='".$id_materia."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" align="center" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
			
?>	