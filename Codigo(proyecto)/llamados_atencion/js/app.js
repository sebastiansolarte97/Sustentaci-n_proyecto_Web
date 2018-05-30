		function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'llamados_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
			})
		}
	
		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var falta = button.data('falta') // Extraer la información de atributos de datos
		  var fecha = button.data('fecha') // Extraer la información de atributos de datos
		  var nombre_curso = button.data('nombre_curso') // Extraer la información de atributos de datos
		  var id_curso = button.data('id_curso') // Extraer la información de atributos de datos
		  var id_estudiante = button.data('id_estudiante') // Extraer la información de atributos de datos
		  
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Curso: '+falta)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #falta').val(falta)
		  modal.find('.modal-body #fecha').val(fecha)
		  modal.find('.modal-body #nombre_curso').val(nombre_curso)
		  modal.find('.modal-body #id_curso').val(id_curso)
		  modal.find('.modal-body #id_estudiante').val(id_estudiante)
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id')
		  var falta = button.data('falta') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Eliminar Curso: '+falta)
		  modal.find('#id').val(id)
		})

	$( "#actualidarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "cmodificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
	
	



		$( "#eliminarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "celiminar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDelete').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});
