<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar materia:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
          <div class="form-group">
            <label for="cod_curso" class="control-label">Id:</label>
            <input type="text" class="form-control" id="id_materia" name="id_materia" readonly="true">
		       
          </div>
		  <div class="form-group">
            <label for="nombre" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre_mate" name="nombre_mate">
          </div>
		  <div class="form-group">
            <label for="descripcion" class="control-label">Nombre del docente a cargo:</label>
            <input type="text" class="form-control" id="nombre_pro" name="nombre_pro">
          </div>
      
      <div class="form-group">
            <label for="descripcion" class="control-label">Apellido del docente a cargo:</label>
            <input type="text" class="form-control" id="apellido_pro" name="apellido_pro">
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