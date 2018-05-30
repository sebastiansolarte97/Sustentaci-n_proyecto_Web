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
            <input type="text" class="form-control" id="id_profesores" name="id_profesores" readonly="true">
		       
          </div>
		  <div class="form-group">
            <label for="identificacion" class="control-label">Identificacion:</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion">
          </div>
		  <div class="form-group">
            <label for="nombre_1" class="control-label">Primer nombre:</label>
            <input type="text" class="form-control" id="nombre_pro" name="nombre_pro">
          </div>
       <div class="form-group">
            <label for="nombre_2" class="control-label">Segundo nombre:</label>
            <input type="text" class="form-control" id="nombre2_pro" name="nombre2_pro">
          </div>
		  <div class="form-group">
            <label for="apellido_1" class="control-label">Primer apellido:</label>
            <input type="text" class="form-control" id="apellido_pro" name="apellido_pro"> 
          </div>
      <div class="form-group">
            <label for="apellido_2" class="control-label">Segundo apellido:</label>
            <input type="text" class="form-control" id="apellido2_pro" name="apellido2_pro"> 
          </div>    
		  <div class="form-group">
            <label for="curso" class="control-label">Numero de telefono:</label>
            <input type="text" class="form-control" id="num_cel_pro" name="num_cel_pro"> 
          </div>    
        
        <div class="form-group">
            <label for="iden_acudiente" class="control-label">Cargo acádemico:</label>
            <input type="text" class="form-control" id="cargo_aca" name="cargo_aca"> 
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