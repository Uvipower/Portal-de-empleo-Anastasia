  
	//INDEX
	$("#registro").click(function(){
		$(window).attr('location', 'registro.html');
	});


	//LOGIN ACCESO
  	$(function(){
        $("#boton_acceso").click(function(){
            $.ajax({
                type: "POST",
                url: "php/procesar_login.php",
                data: $("#acceso_cuenta").serialize()
            })
            //Si todo es correcto//
            .done(function(data){
            	if(data == 1){
	                setTimeout(function(){
	                	$(window).attr('location', 'empresa/index.php');
	                }, 100);
               	}
	            else if(data == 2){
	                setTimeout(function(){
	                	$(window).attr('location', 'persona/index.php');
	                }, 100);
	            }
	            else{
	            	swal({   
		            	title: "Acceso",   
		            	text: data,   
		            	type: "error",   
		            	confirmButtonText: "Ok!" 
		            });
	            }
            })
            //Si falla//
            .fail(function(data){
	            swal({   
	            	title: "Acceso",   
	            	text: data,   
	            	type: "error",   
	            	confirmButtonText: "Ok!" 
	            });
            });
            return false; // Evitar ejecutar el submit del formulario.
        });
    });
  //TERMINA INDEX

  //FORMULARIO PERSONAS FUNCIONALIDAD

  //FORM PERSONA AJAX
  //TERMINA FORM PERSONA AJAX

  $(document).ready(function(){
			//EMPIEZA CHANGE
			//especiales, si tal cosa muestra, en caso contrario oculta
			//oculta
			$(".extranjero_documento").hide(0,"swing");
			$(".renta").hide(0,"swing");
			$(".clase_numero_licencia").hide(0,"swing");
			$(".escuela").hide(0,"swing");
			$(".trabajo").hide(0,"swing");
			$(".conyuge_trabaja").hide(0,"swing");

			//apenas cambie
		    $("#casa_propia").change(function(){
		    	//toma valor del input
		    	var casa_propia = $("#casa_propia").val();
		    	if(casa_propia == 1){
		    		//oculta
		    		$(".renta").hide(1000,"swing");
		    	}
		    	else{
		    		$(".renta").show(1000,"swing");
		    	}
		    });
		     $("#trabajo_anterior").change(function(){
		    	//toma valor del input
		    	var trabajo = $("#trabajo_anterior").val();
		    	if(trabajo == 1){
		    		//oculta
		    		$(".trabajo").show(1000,"swing");
		    	}
		    	else{
		    		$(".trabajo").hide(1000,"swing");
		    	}
		    });
		    $("#estudia").change(function(){
		    	//toma valor del input
		    	var estudia = $("#estudia").val();
		    	if(estudia == 0){
		    		//oculta
		    		$(".escuela").hide(1000,"swing");
		    	}
		    	else{
		    		$(".escuela").show(1000,"swing");
		    	}
		    });
		    $("#estado_civil").change(function(){
		    	//toma valor del input
		    	var estado_civil = $("#estado_civil").val();
		    	if(estado_civil == "Casado"){
		    		//oculta
		    		$(".conyuge_trabaja").show(1000,"swing");
		    	}
		    	else{
		    		$(".conyuge_trabaja").hide(1000,"swing");
		    	}
		    });
		    $("#licencia").change(function(){
		    	var licencia = $("#licencia").val();
		    	if(licencia == 0){
		    		$(".clase_numero_licencia").hide(1000,"swing");
		    	}
		    	else{
		    		$(".clase_numero_licencia").show(1000,"swing");
		    	}
		    });
		    $("#es_extranjero").change(function(){
		    	var es_extranjero = $("#es_extranjero").val();
		    	if(es_extranjero == 0){
		    		$(".extranjero_documento").hide(1000,"swing");
		    	}
		    	else{
		    		$(".extranjero_documento").show(1000,"swing");
		    	}
		    });
		    //TERMINA CHANGE
		    //EMPIEZA CLICK DE TABLA, ANEXADO DE NUEVA FILA
		    $("#nueva_referencia").click(function(){
	  			$('#referencias > tbody:last').append('<tr><td><input type="text" name="nombre_r[]" id="nombre_r"></td><td><input type="text" name="direccion_r[]" id="direccion_r"></td><td><input type="text" name="numero_r[]" id="numero_r"></td><td><input type="text" name="parentesco_r[]" id="parentesco_r"></td><td><input type="button" value="Borrar" id="borrar_fila" class="borrar_fila"/></td></tr>');

	  		});
	  		//BORRADO DE FILA
	  		//AGARRA LA TABLA, Y AL MOMENTO DE HACER CLIC EN EL ID BORRAR FILA HACE LA FUNCION DE
	  		$("#referencias").on("click","#borrar_fila", function(){
	  			//BORRAR TODA ESTA FILA DEL TR Y TODO LO QUE TENGA DENTRO
            	$(this).parents("tr").remove();
			});
	  		//TERMINA CLICK
	});
  //TERMINA FORMULARIO PERSONAS FUNCIONALIDAD

  //FORM PERSONA AJAX

    $(function(){
        $("#boton_ingreso_persona").click(function(){
	        var url = "../php/dar_alta_pers.php"; // El script a dónde se realizará la petición.
		        $.ajax({
		            type: "POST",
		            url: url,
		            data: $("#form_pers").serialize()
		        })
  				.done(function(data){
  					swal({   
			            title: "Registro usuario",   
			            text: data,   
			            type: "success",   
			            confirmButtonText: "Ok!" 
		           	});
  				})
  				.fail(function(data){
  					swal({   
			        	title: "Registro usuario",   
			        	text: data,   
			        	type: "error",   
			        	confirmButtonText: "Ok!" 
		            });
  				});
		    return false; // Evitar ejecutar el submit del formulario.
		});
	});
  //TERMINA FORM PERSONA AJAX


  //EMPIEZA FORMULARIO EMPRESA
  	$(function(){
        $("#boton_ingreso_empresa").click(function(){
	     	var url = "../php/dar_alta_emp.php"; // El script a dónde se realizará la petición.
		        $.ajax({
		            type: "POST",
		            url: url,
		            data: $("#form_emp").serialize()
		        })
  				.done(function(data){
  					swal({   
			            title: "Registro empresa",   
			            text: data,   
			            type: "success",   
			            confirmButtonText: "Ok!" 
		            	});
  				})
  				.fail(function(data){
  					swal({   
			        	title: "Registro empresa",   
			        	text: data,   
			        	type: "error",   
			        	confirmButtonText: "Ok!" 
		             });
  				});
		    return false; // Evitar ejecutar el submit del formulario.
		});
	});
  //TERMINA FORMULARIO DE EMPRESA

  //INDEX PERSONA
  	/*$(document).ready(function(){
		$("#busqueda").autocomplete({
			source: "../php/busqueda.php", //pagina donde se mandara la consulta
			minLength: 1  //tamaño de la cadena
		});
	});*/

	//CODIGOS POSTALES INDEX PERSONA

	function verificar_cp(){
		var cp = $("#cp").val(); //SE TOMA EL VALOR QUE ESTA EN EL INPUT
		$.getJSON(
		'https://api-codigos-postales.herokuapp.com/codigo_postal/'+cp, //se hace llamada a la pagina

			function(data){
				var json = eval(data); //se convierte en json 
				if (json != false) { //si la consulta tiene algo
					//remueve todos los option que llegaron a tener algo
					$("option#colonias").remove();
					//ciclo para extraer todos los datos
					$.each(json, function(i,valor){
						console.log(i+" -> " +valor.codigo_postal + ", "+valor.colonia); //mostramos en consola
						//creacion de los options
						$('#colonias').last().append("<option id='colonias' value="+valor.colonia+">"+valor.colonia+"</option>");
						$("#ciudad").val(valor.municipio);
						$("#estado").val(valor.estado);

					//al input de ciudad le anexa el valor de desactivado
					//$("#ciudad").val(valor.municipio).prop("disabled",true);

					//$("#estado").val(valor.estado).prop("disabled",true);

					});
				}
			}
		);
		return false;
	}
	//TERMINA INDEX PERSONA

	//NUEVA VACANTE

	$(function(){
        $("#ingreso_vacante").click(function(){
        	var url = "../../php/dar_alta_vacante.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $("#nueva_vacante").serialize()
            })
  			.done(function(data){
  				swal({   
			        title: "Nueva vacante",   
			        text: data,   
			        type: "success",   
			        confirmButtonText: "Ok!" 
		       	});
  			})
  			.fail(function(data){
  				swal({   
			    	title: "Nueva vacante",   
			    	text: data,   
			    	type: "error",   
			    	confirmButtonText: "Ok!" 
		        });
  			});

	    return false; // Evitar ejecutar el submit del formulario.
		});
	});
  //TERMINA NUEVA VACANTE