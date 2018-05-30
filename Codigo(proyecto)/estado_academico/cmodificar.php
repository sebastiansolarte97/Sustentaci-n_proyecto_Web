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
	if (empty($_POST['id_estado'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['id_materia'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['nota'])){
			$errors[] = "Descripcion vacío";
		}else if (empty($_POST['id_curso'])){
			$errors[] = "grado vacío";
		}  else if (
			!empty($_POST['id_estado']) &&
			!empty($_POST['id_materia']) && 
			!empty($_POST['nota']) &&
			!empty($_POST['id_curso']) 
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_materia=mysqli_real_escape_string($con,(strip_tags($_POST["id_materia"],ENT_QUOTES)));
		$nota=mysqli_real_escape_string($con,(strip_tags($_POST["nota"],ENT_QUOTES)));
		$id_curso=mysqli_real_escape_string($con,(strip_tags($_POST["id_curso"],ENT_QUOTES)));
		$id_estado=intval($_POST['id_estado']);
		$sql="UPDATE estado_academico SET id_materia='".$id_materia."', nota='".$nota."', id_curso='".$id_curso."' WHERE id_estado='".$id_estado."'";
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