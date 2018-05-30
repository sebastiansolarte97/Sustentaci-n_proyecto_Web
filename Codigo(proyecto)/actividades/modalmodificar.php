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
            <label for="id" class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id" readonly="true">
		       
          </div>
		  <div class="form-group">
            <label for="nombre" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
		  <div class="form-group">
            <label for="fecha" class="control-label">Fecha:</label>
            <input type="text" class="form-control" id="fecha" name="fecha">
          </div>
       <div class="form-group">
            <label for="descripcion" class="control-label">Descripcion:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
          </div>
		  <div class="form-group">
            <label for="tipo" class="control-label">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo"> 
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