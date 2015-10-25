<?php
//se inicia sesion
session_start();
//checa que la sesion tenga algo, tambien la contraseña
//solo pueden entrar los que son administrativos
if (isset($_SESSION['username']) && isset($_SESSION['acceso'])){

	if ($_SESSION['acceso'] == 1){



	?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css" /> 
</head>
<body>

	<h4 align="center">Persona</h4>
	<form action="" id="busqueda" name="busqueda">
		<label for="busqueda">Buscador</label>
		<input type="search" name="busqueda" id="busqueda" class="auto">
	</form>
	

	<a href="../php/logout.php">Cerrar sesion</a>
	
</body>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script>
$(document).ready(function(){
	$("#busqueda").autocomplete({
		source: "../php/busqueda.php", //pagina donde se mandara la consulta
		minLength: 1  //tamaño de la cadena
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