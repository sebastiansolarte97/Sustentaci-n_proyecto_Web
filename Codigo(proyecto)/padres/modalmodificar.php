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
            <input type="text" class="form-control" id="id_padres" name="id_padres" readonly="true">
		       
          </div>
		  <div class="form-group">
            <label for="nombre" class="control-label">Identificacion:</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion">
          </div>
		  <div class="form-group">
            <label for="descripcion" class="control-label">Primer nombre:</label>
            <input type="text" class="form-control" id="nombre_1" name="nombre_1">
          </div>
       <div class="form-group">
            <label for="descripcion" class="control-label">Segundo nombre:</label>
            <input type="text" class="form-control" id="nombre_2" name="nombre_2">
          </div>
		  <div class="form-group">
            <label for="duracion" class="control-label">Primer apellido:</label>
            <input type="text" class="form-control" id="apellido_1" name="apellido_1"> 
          </div>
       <div class="form-group">
            <label for="duracion" class="control-label">Segundo apellido:</label>
            <input type="text" class="form-control" id="apellido_2" name="apellido_2"> 
          </div>
      <div class="form-group">
            <label for="duracion" class="control-label">Número de telefono:</label>
            <input type="text" class="form-control" id="num_cel" name="num_cel"> 
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