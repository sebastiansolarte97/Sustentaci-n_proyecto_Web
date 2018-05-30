<?php
  require '../cone.php';

  $sqle="SELECT id_cursos,nombre_curso  FROM cursos";
  $tp=$conexion->query($sqle);
  ?>

<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar país:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
          <div class="form-group">
            <label for="cod_curso" class="control-label">Id:</label>
            <input type="text" class="form-control" id="id_estudiante" name="id_estudiante" readonly="true">
		       
          </div>
		  <div class="form-group">
            <label for="identificacion" class="control-label">Identificacion:</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion">
          </div>
		  <div class="form-group">
            <label for="nombre_1" class="control-label">Primer nombre:</label>
            <input type="text" class="form-control" id="nombre_est" name="nombre_est">
          </div>
       <div class="form-group">
            <label for="nombre_2" class="control-label">Segundo nombre:</label>
            <input type="text" class="form-control" id="nombre2_est" name="nombre2_est">
          </div>
		  <div class="form-group">
            <label for="apellido_1" class="control-label">Primer apellido:</label>
            <input type="text" class="form-control" id="apellido_est" name="apellido_est"> 
          </div>
      <div class="form-group">
            <label for="apellido_2" class="control-label">Segundo apellido:</label>
            <input type="text" class="form-control" id="apellido2_est" name="apellido2_est"> 
          </div>    
		  <div class="form-group">
            <label for="curso" class="control-label">Curso:</label>
          
            <select class="form-control" id="id_curso" name="id_curso">
                     <option> Seleccionar</option>
                    <?php while($rows = $tp->fetch_assoc()){ ?>
                        <option  value="<?php echo $rows['id_cursos']; ?>"><?php echo $rows['nombre_curso']; ?></option>
                       <?php } ?>
              </select>
          </div>    
        
 


        <div class="form-group">
            <label for="iden_acudiente" class="control-label">Identifación del padre:</label>
            <input type="text" class="form-control" id="id_padresflia" name="id_padresflia"> 
          </div>   
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>