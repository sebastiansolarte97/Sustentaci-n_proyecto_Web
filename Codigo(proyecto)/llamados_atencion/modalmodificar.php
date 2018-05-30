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
            <input type="text" class="form-control" id="id" name="id" readonly="true">
		       
          </div>
		  <div class="form-group">
            <label for="falta" class="control-label">Falta:</label>
            <input type="text" class="form-control" id="falta" name="falta">
          </div>
		  <div class="form-group">
            <label for="fecha" class="control-label">Fecha:</label>
            <input type="text" class="form-control" id="fecha" name="fecha">
          </div>
       
<div class="form-group">
            <label for="descripcion" class="control-label">Estudiante:</label>
            <input type="text" class="form-control" id="id_estudiante" name="id_estudiante">
          </div>
      

       <div class="form-group">
            <label for="descripcion" class="control-label">Grado:</label>
            
            <select class="form-control" id="id_curso" name="id_curso">
                     <option> Seleccionar</option>
                    <?php while($rows = $tp->fetch_assoc()){ ?>
                        <option  value="<?php echo $rows['id_cursos']; ?>"><?php echo $rows['nombre_curso']; ?></option>
                       <?php } ?>
              </select>

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