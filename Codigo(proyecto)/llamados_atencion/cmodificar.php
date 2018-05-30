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
	if (empty($_POST['id'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['falta'])){
			$errors[] = "Falta vacía";
		} else if (empty($_POST['fecha'])){
			$errors[] = "fecha vacía";
		}else if (empty($_POST['id_curso'])){
			$errors[] = "grado vacío";
		}else if (empty($_POST['id_estudiante'])){
			$errors[] = "estudiante vacío";
		  }else if (
			!empty($_POST['id']) &&
			!empty($_POST['falta']) && 
			!empty($_POST['fecha']) &&
			!empty($_POST['id_estudiante']) &&
			!empty($_POST['id_curso']) 
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$falta=mysqli_real_escape_string($con,(strip_tags($_POST["falta"],ENT_QUOTES)));
		$fecha=mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));
		$id_estudiante=mysqli_real_escape_string($con,(strip_tags($_POST["id_estudiante"],ENT_QUOTES)));
		$id_curso=mysqli_real_escape_string($con,(strip_tags($_POST["id_curso"],ENT_QUOTES)));
		$id=intval($_POST['id']);
		$sql="UPDATE llamados_atencion SET falta='".$falta."', fecha='".$fecha."', id_estudiante='".$id_estudiante."', id_curso='".$id_curso."' WHERE id='".$id."'";
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