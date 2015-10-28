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
		var timestamp = null;
		function cargar_push(){
			//consulta del timestamp en httpush.php
			$.ajax({
				async: true,
				type: "POST",
				url: "../php/httpush.php",
				data: "&timestamp="+timestamp,
				dataType: "html",
				success: function(data){
					var json 	= eval("("+data+")");
					timestamp 	= json.timestamp;
					if(timestamp == null){

					}
					else{
						$.ajax({
							async: true,
							type: "POST",
							url: "../php/empresa_tiempo_real.php",
							data: "",
							dataType: "html",
							success: function (data){
								//JSON.parse para indicar que lo parse a json
								//var datos 	= JSON.parse(data);

								//console.log(datos);

								//each para recorrer todo el JSON e imprimiendo en la consola

								/*$.each(datos, function(i,valor){
									console.log(i+" -> " +valor.Nombre + ", "+valor.Numero);
									$("#empresas").append("<p>"+i+"->"+valor.Nombre+"</p>");
								});*/

								

								/*
								* ACA BUSCAR LA MANERA EN QUE SE IMPRIMA EN EL HTML CON ATRIBUTOS PARA ARRIBR EN MODAL
								*/

								$("#empresas").html(data);
								//$("#numeros").html(datos['numero']);
							}
						});
					}
					setTimeout("cargar_push()",1000);
				}

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
	Empresas: <div id="empresas"></div>
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