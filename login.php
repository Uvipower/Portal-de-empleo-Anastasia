<!DOCTYPE html>
<html lang="es">
<?php $id = "login";?>
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/navbar-style.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">


</head>
<body>
	<!--Primer contenedor con logo y links-->
	<!--<div class="container-fluid well">
		Columna logo con imagen responsiva
		<div class="col-xs-3 col-sm-3 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-2 col-lg-offset-0">
			<img src="images/logo1.png" alt="Anastacia" class="img-responsive">
		</div>
	</div>-->
	<header>
<!-- ============================= Barra de Navegacion============================ -->
		<?php include("head-footer/navbar-inicio.php");?>
	</header>
	<main>

<!-- ===================== Cuerpo de la pagina ========================== -->
	<div class="container">
		<br><br><br>
		<h1 class="text-center texto1">Bienvenido</h1>
		<br>
		<h4 class="text-center"><p class="texto1">Asegurate de introducir tus datos correctamente <br> para que no tengas problemas para iniciar sesión</p></h4>
		<br>
	</div>

	<div class="container well" id="sha">
		<div class="row">
			<div class="col-xs-12">
				<img src="images/avatar.png" class="img-responsive" id="avatar">
			</div>
		</div>
		<form class="login" action="" method="POST" id="acceso_cuenta">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Usuario" name="username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Contraseña" name="password" required>
			</div>
			<button class="btn btn-lg btn-primary btn-block" id="boton_acceso" type="submit">Iniciar Sesión</button>
			<div class="checkbox">
				<label class="checkbox">
					<input type="checkbox" value="1" name="remember"> No cerrar sesión
				</label>
				<p class="help-block"><a href="#">¿No puedes acceder a tu cuenta?</a></p>
			</div>
		</form>
		
	</div>
	<?php include("forms/modalRegistro.php");?>
	<br>
	</main>
<!-- ======================= Pie de Pagina ============================= -->
<div class="container">
	<?php include("head-footer/footer-inicio.php"); ?>
</div>
<!--<footer class="container-fluid well">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-lg-offset-3">
			<small class="pull-left">
				<a href="#" class="enlace-sesion">Nuestra Politica | </a>
				<a href="#" class="enlace-sesion">Ayuda | </a>
				<a href="#" class="enlace-sesion">Para Empresas | </a>
				<a href="#" class="enlace-sesion">Dispositivos Moviles</a>
			</small>
		</div>
	</div>
</footer>-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/scripts.js"></script>
    <script src="js/sweetalert.min.js"></script>


</body>
</html>