		function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'estudiante_ajax.php',
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
		  var id_estudiante = button.data('id_estudiante') // Extraer la información de atributos de datos
		  var identificacion = button.data('identificacion') // Extraer la información de atributos de datos
		  var nombre_est = button.data('nombre_est') // Extraer la información de atributos de datos
		  var nombre2_est = button.data('nombre2_est') // Extraer la información de atributos de datos
		  var apellido_est = button.data('apellido_est') // Extraer la información de atributos de datos
		  var apellido2_est = button.data('apellido2_est') // Extraer la información de atributos de datos
		  var id_curso = button.data('id_curso') // Extraer la información de atributos de datos
		  var nombre_curso = button.data('nombre_curso') // Extraer la información de atributos de datos
		  var id_padresflia = button.data('id_padresflia') // Extraer la información de atributos de datos
		  
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Curso: '+identificacion)
		  modal.find('.modal-body #id_estudiante').val(id_estudiante)
		  modal.find('.modal-body #identificacion').val(identificacion)
		  modal.find('.modal-body #nombre_est').val(nombre_est)
		  modal.find('.modal-body #nombre2_est').val(nombre2_est)
		  modal.find('.modal-body #apellido_est').val(apellido_est)
		  modal.find('.modal-body #apellido2_est').val(apellido2_est)
		  modal.find('.modal-body #id_curso').val(id_curso)
		  modal.find('.modal-body #nombre_curso').val(nombre_curso)
		  modal.find('.modal-body #id_padresflia').val(id_padresflia)
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id_estudiante = button.data('id_estudiante')
		  var identificacion = button.data('identificacion') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Eliminar Curso: '+identificacion)
		  modal.find('#id_estudiante').val(id_estudiante)
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
