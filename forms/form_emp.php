<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar-style.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	
</head>
<body>
	<header>
		<?php include("../head-footer/navbar-inicio.php");?>
	</header>
		
	<br><br><br>	
	
	<div class="container well">
		<h1 >Empresa!</h1>
		<br>
		<form action="" method="POST" name="form_emp" id="form_emp" autocomplete="off">
			<div class="form-group">
				<label for="nombre">Nombre de la empresa</label>
				<input type="text" class="form-control" name="nombre" id="nombre" required>
			</div>
		
			<div class="form-group">
				<label for="logotipo">Logotipo</label>
				<input type="file" name="logotipo" id="logotipo" required>
			</div>
			
		<div class="form-group">
			<label for="username">Usuario</label>
			<input type="text" class="form-control" name="username" id="username" required>
		</div>
		<div class="form-group">
			<label for="password">Contraseña</label>
			<input type="password" class="form-control" name="password" id="password" required>
		</div>
		
		<div class="form-group">
			<label for="password2">Repetir contraseña</label>
			<input type="password" class="form-control" name="password2" id="password2" required>
		</div>
		
		<div class="form-group">
			<label for="correo">Correo</label>
			<input type="email" class="form-control" name="correo" id="correo" required>
		</div>
		<br>

		<h4>Informacion basica</h4>

		<div class="form-group form-inline">
			<label for="cp">Codigo postal</label>
			<input type="search" class="form-control" name="cp" id="cp" class="auto">
			<input type="button" class="btn btn-info" value="Verificar" onclick="verificar_cp();"/>
		</div>

		<div class="form-group">
			<label for="estado">Estado</label>
			<input type="text" class="form-control" name="estado" id="estado" placeholder="Estado"/>	
		</div>

		<div class="form-group">
			<label for="ciudad">Ciudad</label>
			<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad"/>
		</div>
		
		
		<select name="colonias" id="colonias" class="form-control">
			<option value="" selected disabled>Seleccionar colonia</option>
			<option id="colonias" value="" disabled>Cargando...</option>
		</select>

		<div class="form-group">
			<label for="direccion">Direccion</label>
			<input class="form-control" type="text" name="direccion" id="direccion" required>
		</div>
		
		<div class="form-group">
			<label for="numero">Numero telefonico</label>
			<input class="form-control" type="text" name="numero" id="numero" required>
		</div>
		
		<div class="form-group">
			<label for="razon_social">Razon social</label>
			<input class="form-control" type="text" name="razon_social" id="razon_social" required>
		</div>
		
		<div class="form-group">
			<label for="giro">Giro de la empresa</label>
			<input class="form-control" type="text" name="giro" id="giro" required>
		</div>
		
		<div class="form-group">
			<label for="fundacion">Fundada desde:</label>
			<input class="form-control" type="date" name="fundacion" id="fundacion" required>
		</div>
		
		<br>

		<h4>Responsable</h4>
		
		<div class="form-group">
			<label for="nombre_r">Nombre</label>
			<input class="form-control" type="text" name="nombre_r" id="nombre_r" required>
		</div>
		
		<div class="form-group">
			<label for="correo_r">Correo electronico</label>
			<input class="form-control" type="email" name="correo_r" id="correo_r" required>
		</div>
		
		<div class="form-group">
			<label for="numero_r">Numero celular</label>
			<input class="form-control" type="text" name="numero_r" id="numero_r" required>
		</div>
		
		<div class="form-group">
			<label for="puesto_r">Puesto</label>
			<input class="form-control" type="text" name="puesto_r" id="puesto_r" required>
		</div>

		<br>

    	<button type="reset" class="btn btn-danger">Restablecer todo</button>
    	<button id="boton_ingreso_empresa" type="submit" class="btn btn-success">Dar de alta</button>
	</form>
	</div>
	



	

	
</body>

<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/sweetalert.min.js"></script>

<script type="text/javascript" src="../js/scripts.js"></script>

</html>