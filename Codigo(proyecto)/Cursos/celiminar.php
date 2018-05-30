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
	 if (empty($_POST['id_cursos'])){
			$errors[] = "Codigo Vacio";
		}   else if (
			!empty($_POST['id_cursos']) 
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
			// escaping, additionally removing everything that could be (html/javascript-) code
	
		$id_cursos=intval($_POST['id_cursos']);
		
		$sql="DELETE FROM cursos WHERE id_cursos='".$id_cursos."'";
		$query_delete = mysqli_query($con,$sql);
			if ($query_delete){
				$messages[] = "Los datos han sido eliminados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger col-md-5 col-md-offset-4" align="center" role="alert">
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
				<div class="alert alert-success col-md-8 col-md-offset-2" align="center" role="alert">
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