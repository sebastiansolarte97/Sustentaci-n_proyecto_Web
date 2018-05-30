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
	if (empty($_POST['id_estudiante'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['identificacion'])){
			$errors[] = "identificacion vacía";
		} else if (empty($_POST['nombre_est'])){
			$errors[] = "Primer nombre vacío";
		}else if (empty($_POST['nombre2_est'])){
			$errors[] = "Segundo nombre vacío";
		}else if (empty($_POST['apellido_est'])){
			$errors[] = "Primer apellido vacío";
		}else if (empty($_POST['apellido2_est'])){
			$errors[] = "Segundo apellido vacío";
		}else if (empty($_POST['id_curso'])){
			$errors[] = "curso vacío";
		}else if (empty($_POST['id_padresflia'])){
			$errors[] = "Id vacío";
		}else if (
			!empty($_POST['id_estudiante']) &&
			!empty($_POST['identificacion']) && 
			!empty($_POST['nombre_est']) &&
			!empty($_POST['nombre2_est']) &&
			!empty($_POST['apellido_est']) &&
			!empty($_POST['apellido2_est']) &&
			!empty($_POST['id_curso']) &&
			!empty($_POST['id_padresflia'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$identificacion=mysqli_real_escape_string($con,(strip_tags($_POST["identificacion"],ENT_QUOTES)));
		$nombre_est=mysqli_real_escape_string($con,(strip_tags($_POST["nombre_est"],ENT_QUOTES)));
		$nombre2_est=mysqli_real_escape_string($con,(strip_tags($_POST["nombre2_est"],ENT_QUOTES)));
		$apellido_est=mysqli_real_escape_string($con,(strip_tags($_POST["apellido_est"],ENT_QUOTES)));
		$apellido2_est=mysqli_real_escape_string($con,(strip_tags($_POST["apellido2_est"],ENT_QUOTES)));
		$id_curso=mysqli_real_escape_string($con,(strip_tags($_POST["id_curso"],ENT_QUOTES)));
		$id_padresflia=mysqli_real_escape_string($con,(strip_tags($_POST["id_padresflia"],ENT_QUOTES)));
		$id_estudiante=intval($_POST['id_estudiante']);
		$sql="UPDATE estudiante SET identificacion='".$identificacion."', nombre_est='".$nombre_est."', nombre2_est='".$nombre2_est."', apellido_est='".$apellido_est."', apellido2_est='".$apellido2_est."', id_curso='".$id_curso."', id_padresflia='".$id_padresflia."' WHERE id_estudiante='".$id_estudiante."'";
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