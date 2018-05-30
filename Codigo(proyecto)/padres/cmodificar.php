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
	if (empty($_POST['id_padres'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['identificacion'])){
			$errors[] = "identificacion vacío";
		} else if (empty($_POST['nombre_1'])){
			$errors[] = "nombre vacío";
		}else if (empty($_POST['nombre_2'])){
			$errors[] = "apellido vacío";
		}else if (empty($_POST['apellido_1'])){
			$errors[] = "apellido vacío";
		}else if (empty($_POST['apellido_2'])){
			$errors[] = "apellido vacío";
		}else if (empty($_POST['num_cel'])){
			$errors[] = "Telefono vacío";
		}else if (
			!empty($_POST['id_padres']) &&
			!empty($_POST['identificacion']) && 
			!empty($_POST['nombre_1']) &&
			!empty($_POST['nombre_2']) &&
			!empty($_POST['apellido_1']) &&
			!empty($_POST['apellido_2']) &&
			!empty($_POST['num_cel'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$identificacion=mysqli_real_escape_string($con,(strip_tags($_POST["identificacion"],ENT_QUOTES)));
		$nombre_1=mysqli_real_escape_string($con,(strip_tags($_POST["nombre_1"],ENT_QUOTES)));
		$nombre_2=mysqli_real_escape_string($con,(strip_tags($_POST["nombre_2"],ENT_QUOTES)));
		$apellido_1=mysqli_real_escape_string($con,(strip_tags($_POST["apellido_1"],ENT_QUOTES)));
		$apellido_2=mysqli_real_escape_string($con,(strip_tags($_POST["apellido_2"],ENT_QUOTES)));
		$num_cel=mysqli_real_escape_string($con,(strip_tags($_POST["num_cel"],ENT_QUOTES)));
		$id_padres=intval($_POST['id_padres']);
		$sql="UPDATE padresflia SET identificacion='".$identificacion."', nombre_1='".$nombre_1."', nombre_2='".$nombre_2."', apellido_1='".$apellido_1."', apellido_2='".$apellido_2."', num_cel='".$num_cel."' WHERE id_padres='".$id_padres."'";
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