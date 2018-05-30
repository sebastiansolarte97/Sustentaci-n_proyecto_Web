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
	if (empty($_POST['id_profesores'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['identificacion'])){
			$errors[] = "identificacion vacía";
		} else if (empty($_POST['nombre_pro'])){
			$errors[] = "Primer nombre vacío";
		}else if (empty($_POST['nombre2_pro'])){
			$errors[] = "Segundo nombre vacío";
		}else if (empty($_POST['apellido_pro'])){
			$errors[] = "Primer apellido vacío";
		}else if (empty($_POST['apellido2_pro'])){
			$errors[] = "Segundo apellido vacío";
		}else if (empty($_POST['num_cel_pro'])){
			$errors[] = "curso vacío";
		}else if (empty($_POST['cargo_aca'])){
			$errors[] = "Id vacío";
		}else if (
			!empty($_POST['id_profesores']) &&
			!empty($_POST['identificacion']) && 
			!empty($_POST['nombre_pro']) &&
			!empty($_POST['nombre2_pro']) &&
			!empty($_POST['apellido_pro']) &&
			!empty($_POST['apellido2_pro']) &&
			!empty($_POST['num_cel_pro']) &&
			!empty($_POST['cargo_aca'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$identificacion=mysqli_real_escape_string($con,(strip_tags($_POST["identificacion"],ENT_QUOTES)));
		$nombre_pro=mysqli_real_escape_string($con,(strip_tags($_POST["nombre_pro"],ENT_QUOTES)));
		$nombre2_pro=mysqli_real_escape_string($con,(strip_tags($_POST["nombre2_pro"],ENT_QUOTES)));
		$apellido_pro=mysqli_real_escape_string($con,(strip_tags($_POST["apellido_pro"],ENT_QUOTES)));
		$apellido2_pro=mysqli_real_escape_string($con,(strip_tags($_POST["apellido2_pro"],ENT_QUOTES)));
		$num_cel_pro=mysqli_real_escape_string($con,(strip_tags($_POST["num_cel_pro"],ENT_QUOTES)));
		$cargo_aca=mysqli_real_escape_string($con,(strip_tags($_POST["cargo_aca"],ENT_QUOTES)));
		$id_profesores=intval($_POST['id_profesores']);
		$sql="UPDATE profesores SET identificacion='".$identificacion."', nombre_pro='".$nombre_pro."', nombre2_pro='".$nombre2_pro."', apellido_pro='".$apellido_pro."', apellido2_pro='".$apellido2_pro."', num_cel_pro='".$num_cel_pro."', cargo_aca='".$cargo_aca."' WHERE id_profesores='".$id_profesores."'";
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