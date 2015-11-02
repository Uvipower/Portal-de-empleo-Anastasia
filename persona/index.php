<?php
//se inicia sesion
session_start();
//checa que la sesion tenga algo, tambien la contraseña
//solo pueden entrar los que son administrativos
if (isset($_SESSION['username']) && isset($_SESSION['acceso'])){

	if ($_SESSION['acceso'] == 2){



	?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css" /> 
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>

	<script type="text/javascript">
		var numero_vacantes 	= 0; // cero registros imprimidos
		function cargar_push(){

			$.ajax({
				//ajax tipico
				async: true,
				type: "POST",
				url: "../php/httpush.php",
				data: "&numero_vacantes="+numero_vacantes //se idica cuantos registro ya imprimio
			})
			.done(function(data){
				//si el numero imprimidos es menor a los que hay en la base de datos
				if(numero_vacantes < data){ //validacion, si el numero es mayor httpush no mandara respuesta //se hace doble validacion
					$.ajax({
						//se hace consulta de todos los id
						async: true,
						type: "POST",
						url: "../php/vacantes_tiempo_real.php"//////////////// PIDO LOS ID
					})
					.done(function(data){
						var Id_todas_vacantes = JSON.parse(data);
						var x = Id_todas_vacantes[numero_vacantes].Id_vacante; //se hacede solo al registro indicado
						//si ya imprimio 3 y en la respuesta dice que son 4, falta 1, y como la variable numero_Vacantes tiene como valor el numero 4
						//entra al registro de todas las id y busca el subindice 3 y trae toda la infmracion que falta
						//recorda que se cuenta de 0 a 9 los valores que ya se imprimieron /numero_vacantes/
						console.log(x); //se hace con la finalidad de ver en que registro va
						$.ajax({
							//ajax para traer la informacion de la vacante
							async: true,
							type: "POST",
							url: "../php/informacion_vacante.php",
							data: "&Id="+x
						})
						.done(function(data){
							var json = JSON.parse(data);
							$.each(json, function(i, valor){
								//se imprime en pantalla 
							    $("#vacantes").append("<h5>"+valor.titulo+"</h5><h6>"+valor.puesto+"</h6><hr>");
							    //se inidica que ya se imprmio el registro y se procede a imprimir el siguiente
								numero_vacantes = numero_vacantes+1
							});
						})
						.fail(function(data){

						});
						

						//console.log(data);
						//alert(numero_vacantes);
					})
					.fail(function(data){
						swal({   
	            			title: "Vacantes",   
			            	text: "Hubieron problemas al buscar las vacantes, intente mas tarde",   
			            	type: "error",   
			            	confirmButtonText: "Ok!" 
			            });
					});
				}
				setTimeout("cargar_push()",1000);
			})
			.fail(function(data){
				swal({   
	            	title: "Vacantes",   
	            	text: "Hubieron problemas al buscar las vacantes, intente mas tarde",   
	            	type: "error",   
	            	confirmButtonText: "Ok!" 
	            });
			});

		}
	

		$(document).ready(function(){
			cargar_push();
		});


		
	</script>
</head>
<body>

	<h4 align="center">Persona</h4>
	<label for="busqueda">Buscador</label>
	<input type="search" name="busqueda" id="busqueda" class="auto">

	<br>

	<label for="codigo_postal">Codigo postal</label>
	<input type="search" name="codigo_postal" id="codigo_postal" class="auto">


	<br>
	<input type="text" name="estado" id="estado" placeholder="Estado"/>
	<br>
	<input type="text" name="municipio" id="municipio" placeholder="Municipio"/>

	<select name="colonias" id="colonias">
		<option value="" selected disabled>Colonias</option>
	</select>
	<button onclick="verificar_cp();">JSON</button>
	

	<a href="../php/logout.php">Cerrar sesion</a>

	<br>
	<br>
	<h4>TIEMPO REAL</h4>
	<br>
	<br>
	Empresas: <div id="vacantes"></div>
	Numeros: <div id="numeros"></div>
	
</body>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/scripts.js">



</script>
</html>

<?php 
	}
	else
		{
		//de caso contrario redireciona al login
		echo "<script>history.back();</script>";
		}

	} 
else 
	{
	//de caso contrario redireciona al login
	echo "<script>history.back();</script>";
	}
?>