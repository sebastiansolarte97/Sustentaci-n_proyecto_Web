		function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'profesores_ajax.php',
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
		  var id_profesores = button.data('id_profesores') // Extraer la información de atributos de datos
		  var identificacion = button.data('identificacion') // Extraer la información de atributos de datos
		  var nombre_pro = button.data('nombre_pro') // Extraer la información de atributos de datos
		  var nombre2_pro = button.data('nombre2_pro') // Extraer la información de atributos de datos
		  var apellido_pro = button.data('apellido_pro') // Extraer la información de atributos de datos
		  var apellido2_pro = button.data('apellido2_pro') // Extraer la información de atributos de datos
		  var num_cel_pro = button.data('num_cel_pro') // Extraer la información de atributos de datos
		  var id_cargo_aca = button.data('id_cargo_aca') // Extraer la información de atributos de datos
		  
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Curso: '+nombre_pro)
		  modal.find('.modal-body #id_profesores').val(id_profesores)
		  modal.find('.modal-body #identificacion').val(identificacion)
		  modal.find('.modal-body #nombre_pro').val(nombre_pro)
		  modal.find('.modal-body #nombre2_pro').val(nombre2_pro)
		  modal.find('.modal-body #apellido_pro').val(apellido_pro)
		  modal.find('.modal-body #apellido2_pro').val(apellido2_pro)
		  modal.find('.modal-body #num_cel_pro').val(num_cel_pro)
		  modal.find('.modal-body #cargo_aca').val(cargo_aca)
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id_profesores = button.data('id_profesores')
		  var identificacion = button.data('identificacion') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Eliminar Curso: '+nombre_pro)
		  modal.find('#id_profesores').val(id_profesores)
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
