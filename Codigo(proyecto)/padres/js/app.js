		function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'padres_ajax.php',
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
		  var id_padres = button.data('id_padres') // Extraer la información de atributos de datos
		  var identificacion = button.data('identificacion') // Extraer la información de atributos de datos
		  var nombre_1 = button.data('nombre_1') // Extraer la información de atributos de datos
		  var nombre_2 = button.data('nombre_2') // Extraer la información de atributos de datos
		  var apellido_1 = button.data('apellido_1') // Extraer la información de atributos de datos
		  var apellido_2 = button.data('apellido_2') // Extraer la información de atributos de datos
		  var num_cel = button.data('num_cel') // Extraer la información de atributos de datos
		  
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Curso: '+nombre_1)
		  modal.find('.modal-body #id_padres').val(id_padres)
		  modal.find('.modal-body #identificacion').val(identificacion)
		  modal.find('.modal-body #nombre_1').val(nombre_1)
		  modal.find('.modal-body #nombre_2').val(nombre_2)
		  modal.find('.modal-body #apellido_1').val(apellido_1)
		  modal.find('.modal-body #apellido_2').val(apellido_2)
		  modal.find('.modal-body #num_cel').val(num_cel)
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id_padres = button.data('id_padres')
		  var identificacion = button.data('identificacion') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Eliminar Curso: '+nombre_1)
		  modal.find('#id_padres').val(id_padres)
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
