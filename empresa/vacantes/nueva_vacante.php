<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../../css/sweetalert.css">

</head>
<body>

	<h4>Nueva vacante!</h4>

	<form action="" method ="POST" id="nueva_vacante" name="nueva_vacante" autocomplete="off">
		<label for="titulo">Titulo</label>
		<input type="text" name="titulo" id="titulo">

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


		<button id="ingreso_vacante" type="submit">Dar de alta</button>
		<button type="reset">Restablecer todo</button>

	</form>

	
</body>

<script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../js/sweetalert.min.js"></script>
<script type="text/javascript" src="../../js/scripts.js"></script>

</html>