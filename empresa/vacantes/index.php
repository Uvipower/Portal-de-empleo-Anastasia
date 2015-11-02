<?php
//se inicia sesion
session_start();
//checa que la sesion tenga algo, tambien la contraseña
//solo pueden entrar los que son administrativos
if (isset($_SESSION['username']) && isset($_SESSION['acceso']) && isset($_SESSION['Id'])){

	if ($_SESSION['acceso'] == 1){

		include("../../php/conexion_login.php");

		$Id_empresa = $_SESSION['Id'];

		$query = "SELECT * FROM vacantes WHERE Id_empresa = '$Id_empresa'";
		$busqueda = $con->prepare($query);
		$busqueda->execute() or die ("Error: Al buscar vacantes");


	?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../../css/sweetalert.css">

</head>
<body>

	<h4 align="center">Empresa</h4>


	<table border="1">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Puesto</th>
				<th>De</th>
				<th>a</th>
				<th>Sueldo</th>
				<th>Descripcion</th>
				<th>Estatus</th>
				<th>Modificar</th>
			</tr>
		</thead>

		<tbody>

			<?php 

			while($vacantes = $busqueda->fetch(PDO::FETCH_ASSOC)){
				extract($vacantes);
				echo "<tr>";
				echo	"<td>".$titulo."</td>";
				echo	"<td>".$puesto."</td>";
				echo	"<td>".$horario1."</td>";
				echo	"<td>".$horario2."</td>";
				echo	"<td>".$sueldo."</td>";
				echo	"<td>".$descripcion."</td>";
				if($estatus == 1){
					echo"<td><input type='button' id='estatus' value='Desactivar' onclick='estatus(".$Id_vacante.", 0);'></td>";
				}
				else{
					echo"<td><input type='button' id='estatus' value='Activar' onclick='estatus(".$Id_vacante.", 1);'></td>";
				}
				echo 	"<td><input type='button' id='editar_vacante' value='editar' onclick='editar(".$Id_vacante.");'></td>";
				echo "</tr>";
			}

			?>
			
		</tbody>
	</table>
	<div id="editar_vacante">

		<h4>EN VEZ DE ESTO IRA UN MODAL LUIS, HAY QUE CAMBIAR LOS PARAMETROS DEL FORM</h4>
		<form action="" method ="POST" id="modificar_vacante" name="modificar_vacante" autocomplete="off">
			<label for="titulo">Titulo</label>
			<input type="text" name="titulo" id="titulo">

			<input type="hidden" name="id" id="id">


			<br>

			<label for="puesto">Puesto</label>
			<input type="text" name="puesto" id="puesto">

			<label for="horario1">Horario</label>
			<input type="time" name="horario1" id="horario1">
			a <input type="time" name="horario2" id="horario2">

			<br>
			
			<label for="sueldo">Sueldo</label>
			<input type="number" name="sueldo" id="sueldo">


			<br>

			<label for="descripcion">Descripcion</label>

			<br>
			<textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>


			<br>


			<button id="modificar" type="submit">Modificar</button>
			<button type="reset">Restablecer todo</button>

		</form>
	</div>

	<a href="nueva_vacante.php">Nueva vacante</a>
	<a href="../../php/logout.php">Cerrar sesion</a>
	
</body>
<script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../js/sweetalert.min.js"></script>

<script>
$(document).ready(function(){
	$("div#editar_vacante").hide();
})

	function editar(Id){

		var url = "../../php/editar_vacante.php";
		$.post(
			url, {
				id: Id
			}
		)
		.done(function(data){
			var json = eval(data);

			$.each(json, function(i,valor){
				console.log(i+" -> " +valor.titulo + ", "+valor.puesto);
				$("#id").val(valor.id);
				$("#titulo").val(valor.titulo);
				$("#puesto").val(valor.puesto);
				$("#sueldo").val(valor.sueldo);
				$("#horario1").val(valor.horario1);
				$("#horario2").val(valor.horario2);
				$("#descripcion").val(valor.descripcion);
			})
			$("div#editar_vacante").show();


			


		})
		.fail(function(data){
			alert("fail");
		});
	}
	function estatus(Id, accion){

		var url = "../../php/estatus_vacante.php";
		$.post(
			url, {
				id: Id,
				accion: accion
			}
		)
  		.done(function(data){
  			swal({   
		        title: "Modificar estatus",   
		        text: data,   
		        type: "success",   
		        confirmButtonText: "Ok!" 
		    	});
  		})
  		.fail(function(data){
  			swal({   
		    	title: "Modificar estatus",   
		    	text: data,   
		    	type: "error",   
		    	confirmButtonText: "Ok!" 
		     });
  		});
		return false; // Evitar ejecutar el submit del formulario.
	}

	$(function(){
        $("#modificar").click(function(){
	     	var url = "../../php/modificar_vacante.php"; // El script a dónde se realizará la petición.
		        $.ajax({
		            type: "POST",
		            url: url,
		            data: $("#modificar_vacante").serialize()
		        })
  				.done(function(data){
  					swal({   
			            title: "Modificar vacante",   
			            text: data,   
			            type: "success",   
			            confirmButtonText: "Ok!" 
		            	});
  				})
  				.fail(function(data){
  					swal({   
			        	title: "Modificar vacante",   
			        	text: data,   
			        	type: "error",   
			        	confirmButtonText: "Ok!" 
		             });
  				});
		    return false; // Evitar ejecutar el submit del formulario.
		});
	});

	
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