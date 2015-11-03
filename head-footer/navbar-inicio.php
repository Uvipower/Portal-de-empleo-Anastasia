<!-- ============================= Barra de Navegacion============================ -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#contenido">
					<span class="sr-only"> Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php 
					if ($id == "index") {
						# code...
						echo '<a href="index.php" class="pull-left"><img src="images/logo.png" alt="Anastasia" class="img-responsive" id="logo"></a>
						<a class="navbar-brand" href="index.php">Anastasia</a>';
					}
					else if($id == "login"){
						echo '<a href="index.php" class="pull-left"><img src="images/logo.png" alt="Anastasia" class="img-responsive" id="logo"></a>
						<a class="navbar-brand" href="index.php">Anastasia</a>';
					}
					else{
						echo '<a href="../index.php" class="pull-left"><img src="../images/logo.png" alt="Anastasia" class="img-responsive" id="logo"></a>
						<a class="navbar-brand" href="../index.php">Anastasia</a>';
					}
				?>
			</div>
			<div class="collapse navbar-collapse" id="contenido">
				<ul class="nav navbar-nav navbar-right">
					<?php 
						if ($id == "index") {
							# code...
							echo '<li><a href="login.php">Iniciar Sesión</a></li>
							<li><a href="#" data-toggle="modal" data-target="#modal-registro">Registrarse</a></li>';
						}else if($id == "login"){
							echo '<li><a href="#" data-toggle="modal" data-target="#modal-registro">Registrarse</a></li>';
						}else{
							echo '<li><a href="../login.php">Iniciar Sesión</a></li>';
						}
					?>
					<li class="faa"><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li class="faa"><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
					<li class="faa"><a href="#"><i class="fa fa-envelope-o fa-2x"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>