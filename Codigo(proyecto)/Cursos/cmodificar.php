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
	if (empty($_POST['id_cursos'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['nombre_curso'])){
			$errors[] = "Nombre vacío";
		}  else if (
			!empty($_POST['id_cursos']) &&
			!empty($_POST['nombre_curso'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombre_curso=mysqli_real_escape_string($con,(strip_tags($_POST["nombre_curso"],ENT_QUOTES)));
		$id_cursos=intval($_POST['id_cursos']);
		$sql="UPDATE cursos SET nombre_curso='".$nombre_curso."' WHERE id_cursos='".$id_cursos."'";
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