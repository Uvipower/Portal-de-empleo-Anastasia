<!DOCTYPE html>
<?php $id = "index";?><!-- Agregado 2 de noviembre -->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Portal de Empleo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/navbar-style.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

</head>
<body>
	<header>
		<?php include("head-footer/navbar-inicio.php"); ?>
	</header>
	<main>
		<div id="myCarousel1" class="carousel slide" data-ride="carousel">
			<!--Indicadores-->
			<ul class="carousel-indicators">
				<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel1" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel1" data-slide-to="2" class=""></li>
				<li data-target="#myCarousel1" data-slide-to="3" class=""></li>
				<li data-target="#myCarousel1" data-slide-to="4" class=""></li>
			</ul>
			<div class="carousel-inner" role="listbox">
				<!-- Imagen 1 -->
				<div class="item active">
					<center><img src="images/carousel/img1.jpg" alt="empresa"></center>
					<div class="container">
						<div class="carousel-caption">
							<h1>Titulo 1</h1>
							<p id="nav-tex">Texto bla bla bla bla</p>
							<p><a href="#" class="btn btn-lg btn-info" role="button">Ver Mas</a></p>
						</div>
					</div>
				</div>
				<!-- Imagen 2 -->
				<div class="item">
					<center><img src="images/carousel/img2.jpg" alt=""></center>
					<div class="container">
						<div class="carousel-caption">
							<h1>Titulo 2</h1>
							<p id="nav-tex">Texto bla bla bla bla</p>
							<p><a href="#" class="btn btn-lg btn-info" role="button">Ver Mas</a></p>
						</div>
					</div>
				</div>
				<!-- Imagen 3 -->
				<div class="item">
					<center><img src="images/carousel/img3.jpg" alt=""></center>
					<div class="container">
						<div class="carousel-caption">
							<h1>Titulo 3</h1>
							<p id="nav-tex">Texto bla bla bla bla</p>
							<p><a href="#" class="btn btn-lg btn-info" role="button">Ver Mas</a></p>
						</div>
					</div>
				</div>
				<!-- Imagen 4 -->
				<div class="item">
					<center><img src="images/carousel/img4.jpg" alt=""></center>
					<div class="container">
						<div class="carousel-caption">
							<h1>Titulo 4</h1>
							<p id="nav-tex">Texto bla bla bla bla</p>
							<p><a href="#" class="btn btn-lg btn-info" role="button">Ver Mas</a></p>
						</div>
					</div>
				</div>
			</div>
			<a href="#myCarousel1" class="left carousel-control" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a href="#myCarousel1" class="right carousel-control" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div><!-- Fin Carousel 1-->

		<div class="container"><!-- Inicio de Contenedor -->
			<div class="row">
	           	<br><br>
	        	<div class="col-lg-4">
	 
			        <a href="htc-desire-620-dual-sim.php"><img src="img/desire.png" alt="Generic placeholder image"></a>
			          
			        <h2>Lorem ipsum</h2>
			        <p><span class="badge">Precio $USD</span></p>
			        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget auctor nisi, eget vulputate mi. Donec sodales condimentum tempor. Curabitur lobortis efficitur leo, vitae commodo diam blandit sed. Nullam eu euismod ligula. Nulla facilisi. Aliquam sit amet vulputate orci, vel finibus metus. Donec fringilla, quam eu congue placerat, lorem enim pharetra erat, in dictum turpis magna quis elit. Integer in fringilla risus. Phasellus sit amet mi sed ipsum convallis euismod. Praesent iaculis, purus ac ultrices convallis, felis lectus vulputate elit, et elementum ante justo in sem. Nunc porttitor eleifend quam sodales convallis.</p>
			        <p>
				        <button type="button" class="btn btn-default" title="Lorem ipsum" data-container="body" data-toggle="popover" data-placement="top" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget auctor nisi, eget vulputate mi. Donec sodales condimentum tempor. Curabitur lobortis efficitur leo, vitae commodo diam blandit sed. Nullam eu euismod ligula. Nulla facilisi. Aliquam sit amet vulputate orci, vel finibus metus. Donec fringilla, quam eu congue placerat, lorem enim pharetra erat, in dictum turpis magna quis elit. Integer in fringilla risus. Phasellus sit amet mi sed ipsum convallis euismod. Praesent iaculis, purus ac ultrices convallis, felis lectus vulputate elit, et elementum ante justo in sem. Nunc porttitor eleifend quam sodales convallis.">
				  			Ver detalles <i class="fa fa-eye"></i></button>
				  		<button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i></button>
			  		</p>
	        	</div><!-- /.col-lg-4 -->

	        	<div class="col-lg-4">
	         		<img src="img/lgl45.png" alt="Generic placeholder image">
	         		<h2>Duis dictum</h2>
	          		<p><span class="badge">Precio $USD</span></p>
	          		<p>Duis dictum a ante molestie convallis. Mauris pharetra sed sapien sed aliquam. Nunc gravida euismod ligula ut sagittis. Curabitur ultricies ac risus nec condimentum. Fusce dapibus orci at convallis facilisis. Aenean lobortis velit a nulla congue, eget bibendum diam interdum. Donec nec diam dui. Maecenas quis porttitor nunc.</p>
	          		<p>
	          			<button type="button" class="btn btn-default" title="Duis dictum" data-container="body" data-toggle="popover" data-placement="top" data-content="Duis dictum a ante molestie convallis. Mauris pharetra sed sapien sed aliquam. Nunc gravida euismod ligula ut sagittis. Curabitur ultricies ac risus nec condimentum. Fusce dapibus orci at convallis facilisis. Aenean lobortis velit a nulla congue, eget bibendum diam interdum. Donec nec diam dui. Maecenas quis porttitor nunc.">
	  						Ver detalles <i class="fa fa-eye"></i>
	  					</button>
	  					<button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
						</button>  
	          		</p>
	        	</div><!-- /.col-lg-4 -->

	        	<div class="col-lg-4">
	          		<img src="img/iphone6.png" alt="Generic placeholder image">
	          		<h2>Quisque</h2>
	          		<p><span class="badge">Precio $USD</span></p>
	          		<p>Quisque sed ultrices justo. Nam congue est pellentesque egestas dictum. Duis nibh erat, aliquam in mollis sit amet, placerat eget massa. Curabitur consequat diam sed felis sagittis porttitor. Nunc laoreet tortor quis leo tincidunt ullamcorper. Integer scelerisque est quis tellus malesuada, nec malesuada est pulvinar. Nunc vulputate neque maximus fermentum volutpat. Morbi rhoncus vitae magna id sodales. Nullam aliquet quam libero, vel dapibus urna tristique vel.</p>
	          		<p>
	          			<button type="button" class="btn btn-default" title="Quisque" data-container="body" data-toggle="popover" data-placement="top" data-content=" Quisque sed ultrices justo. Nam congue est pellentesque egestas dictum. Duis nibh erat, aliquam in mollis sit amet, placerat eget massa. Curabitur consequat diam sed felis sagittis porttitor. Nunc laoreet tortor quis leo tincidunt ullamcorper. Integer scelerisque est quis tellus malesuada, nec malesuada est pulvinar. Nunc vulputate neque maximus fermentum volutpat. Morbi rhoncus vitae magna id sodales. Nullam aliquet quam libero, vel dapibus urna tristique vel.">
	  						Ver detalles <i class="fa fa-eye"></i>
	 					 </button>  
	    				<button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
						</button>
	          		</p>
	        	</div><!-- /.col-lg-4 -->

      		</div><!-- /.row -->
		</div><!-- Fin de Contenedor -->
		<?php include("forms/modalRegistro.php");?><!-- Agregado 2 de noviembre -->
	</main>
	<footer>
		<!--Pie de pagina footer-->
		<div class="container">
			<?php include('head-footer/footer-inicio.php'); ?><!-- modificado 2 de noviembre -->
		</div>
	</footer>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script><script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  $(function () {
      $('[data-toggle="popover"]').popover()
  })
</script>
	
</body>
</html>