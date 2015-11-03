<!DOCTYPE html>
<html lang="es">
<?php $id = "form_emp";?>
<head>
	<meta charset="UTF-8">
	<title>Título de la web</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar-style.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="../css/icons-materialize.css">
</head>
<body id="form_empresa">
	<header>
		<?php include("../head-footer/navbar-inicio.php");?>
		<br><br><br><br>
	</header>
	<div class="container">
		<h4>Registro de Empresa</h4>
		<br>
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs"><!-- Pestaña Inicio-->
					<li class="active" id="tab-info-esencial"><a href="#home" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span> Información Esencial</a></li>
					<li class="" id="tab-info-basica"><a href="#info-basica" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-info-sign"></span> Información Básica</a></li>
					<li><a href="#info-responsable" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user"></span> Responsable</a></li>
				</ul><!-- Pestañas Fin-->
				<form action="" method="POST" name="form_emp" id="form_emp" autocomplete="off">
					<div class="tab-content"><!-- Contenidos inicio -->
						<!--==================================================================================-->
						<div class="tab-pane active" id="home"><!-- Contenido sobre Informacion Esencial Inicio-->
							<div class="container well col-xs-12">
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="nombre" class="control-label">Nombre de la empresa</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="mdi-communication-business"></i></span></span>
												<input type="text" class="form-control" name="nombre" id="nombre" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="logotipo" class="control-label">Logo de la empresa</label>
											<input type="file" name="logotipo" id="logotipo" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="username" class="control-label">Usuario</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
												<input type="text" class="form-control" name="username" id="username" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="correo" class="control-label">Correo</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
												<input type="email" class="form-control" name="correo" id="correo" required>
											</div>
										</div>
									</div>
								</div>
								

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="password" class="control-label">Contraseña</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-key"></i></span>
												<input type="password" class="form-control" name="password" id="password" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="password2" class="control-label">Repetir contraseña</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-repeat"></span></span>
												<span class="input-group-addon"><i class="fa fa-key"></i></span>
												<input type="password" class="form-control" name="password2" id="password2" required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<input type="button" id="siguiente1" class="btn btn-info" value="Siguiente">
								</div>
								<div class="form-group">
									<span class="help-block">Todos los campos son requeridos</span>
								</div>
							</div>
						</div><!-- Contenido sobre Informacion Esencial Inicio-->
						<!--==================================================================================-->
						<div class="tab-pane" id="info-basica"><!-- Contenido sobre informacion basica Inicio-->
							<div class="container well col-xs-12">
								<div class="form-group form-inline">
									<label for="cp">Codigo postal</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="mdi-action-markunread-mailbox"></i></span>
										<input type="search" class="form-control" name="cp" id="cp" class="auto">
									</div>
									<input type="button" class="btn btn-info" value="Verificar" onclick="verificar_cp();"/>
								</div>
								<div class="row">
									<div class="col-xs-4">
										<div class="form-group">
											<label for="estado">Estado</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-map-o"></i></span>
												<input type="text" class="form-control" name="estado" id="estado" placeholder="Estado"/>
											</div>	
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label for="ciudad">Ciudad</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
												<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad"/>
											</div>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label for="form-group" class="control-label">Colonia</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
												<select name="colonias" id="colonias" class="form-control">
													<option value="" selected disabled>Seleccionar colonia</option>
													<option id="colonias" value="" disabled>Verifique su CP. Cargando...</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="direccion">Direccion</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>	
												<input class="form-control" type="text" name="direccion" id="direccion" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="numero">Numero telefonico</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-phone"></i></span>
												<input class="form-control" type="text" name="numero" id="numero" required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="razon_social">Razon social</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-certificate"></span></span>
												<input class="form-control" type="text" name="razon_social" id="razon_social" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="giro">Giro de la empresa</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="mdi-action-store"></i></span>
												<input class="form-control" type="text" name="giro" id="giro" required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="fundacion">Fundada desde:</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
												<input class="form-control" type="date" name="fundacion" id="fundacion" required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<input type="button" id="siguiente2" class="btn btn-info" value="Siguiente">
								</div>

								<div class="form-group">
									<span class="help-block">Todos los campos son requeridos</span>
								</div>
							</div>
						</div><!-- Contenido sobre informacion basica Fin-->
						<!--==================================================================================-->
						<div class="tab-pane" id="info-responsable"><!-- Contenido sobre informacion responsable Inicio-->
							<div class="container well col-xs-12">
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="nombre_r">Nombre</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input class="form-control" type="text" name="nombre_r" id="nombre_r" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="puesto_r">Puesto</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
												<input class="form-control" type="text" name="puesto_r" id="puesto_r" required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="correo_r">Correo electronico</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
												<input class="form-control" type="email" name="correo_r" id="correo_r" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="numero_r">Numero celular</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
												<input class="form-control" type="text" name="numero_r" id="numero_r" required>
											</div>
										</div>
									</div>
								</div>

								<br>
								<div class="form-group">
									<button type="reset" class="btn btn-danger">Restablecer todo</button>
						    		<button id="boton_ingreso_empresa" type="submit" class="btn btn-success">Dar de alta</button>
								</div>
								<div class="form-group">
									<span class="help-block">Todos los campos son requeridos</span>
								</div>
							</div>
						</div><!-- Contenido sobre informacion responsable Fin-->

					</div><!-- Contenido Fin -->
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<?php include("../head-footer/footer-inicio.php"); ?>
		</div>
	</footer>
	<script src="../js/jquery-2.1.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/sweetalert.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
	<script>
		$(document).ready(function(){
			$('#siguiente1').click(function(){
				/*$("#home").hide();
				$('#tab-info-esencial').removeClass('active').addClass('');
				$("#info-basica").show();
				$('#tab-info-basica').removeClass('').addClass('active');*/
			});
		});
	</script>
</body>
</html>