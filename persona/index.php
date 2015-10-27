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
	<button onclick="json();">JSON</button>
	

	<a href="../php/logout.php">Cerrar sesion</a>
	
</body>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
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