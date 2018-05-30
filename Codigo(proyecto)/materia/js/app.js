		function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'materia_ajax.php',
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
		  var id_materia = button.data('id_materia') // Extraer la información de atributos de datos
		  var nombre_mate = button.data('nombre_mate') // Extraer la información de atributos de datos
		  var nombre_pro = button.data('nombre_pro') // Extraer la información de atributos de datos
		  var apellido_pro = button.data('apellido_pro') // Extraer la información de atributos de datos
		  
		  
		  
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Curso: '+nombre_mate)
		  modal.find('.modal-body #id_materia').val(id_materia)
		  modal.find('.modal-body #nombre_mate').val(nombre_mate)
		  modal.find('.modal-body #nombre_pro').val(nombre_pro)
		  modal.find('.modal-body #apellido_pro').val(apellido_pro)
		  
		  		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id_materia = button.data('id_materia')
		  var nombre_mate = button.data('nombre_mate') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Eliminar Curso: '+nombre_mate)
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
