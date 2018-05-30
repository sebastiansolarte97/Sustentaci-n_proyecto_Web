<?php

	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'diaro');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		include 'pagination.php'; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 4; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/_
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM cursos");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'ingreso_actividades.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM cursos order by nombre_curso LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
			<link rel="stylesheet" href="css/jquery.dataTables.min.css" >
			<script src="js/jquery.dataTables.min.js" ></script>
			<div class="table-responsive">
            <table class="table table-striped table-hover table-condensed">
            <thead class="thead">
                <tr style="background-color: #f5f8fa;">
                  
                        <th style=" text-align:left;">Id</th>
                        <th style=" text-align:left;">Nombre</th>
                        <th style=" text-align:center;"><em class="glyphicon glyphicon-cog"></em></th>
                </tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
					 <tr>
                  			 	
                  			 	<td align="left"><b><?php echo $row['id_cursos']; ?></b></td>
                  			 	<td align="left"><?php echo $row['nombre_curso']; ?></td>
                  			 	
                  			 	
                  			 	<td align="center">

                          <a  data-toggle="modal" data-target="#dataUpdate" data-id_cursos="<?php echo $row['id_cursos']?>" data-nombre_curso="<?php echo $row['nombre_curso']?>">
                          <span class="glyphicon glyphicon-edit" style="color:#00a59c"></span>
                          </a>&nbsp;&nbsp;


                          <a href="#" data-toggle="modal" data-target="#dataDelete" data-id_cursos="<?php echo $row['id_cursos']?>">
                          <span class="glyphicon glyphicon-trash" style="color:#00a59c"></span>
                          </a>
                           
                          </td>
                  			 </tr>
				<?php
			}
			?>
			</tbody>
			
		</table>
			<div class="table-pagination pull-right">
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
			</div>
		
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}
	}
?>
