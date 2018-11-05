<?php

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/global.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Jquery.Mobile/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>themes/habitacion.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>themes/jquery.mobile.icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>Jquery.Mobile/jquery.mobile.structure-1.4.5.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
</head>

<body>

    <div data-role="header">
			<a href= "index.html" data-icon="home">Hotel</a>
			<h1><img src="<?php echo base_url(); ?>/images/hotel.png"></h1>
			<a href="<?php echo base_url(); ?>index.php/login/admi" data-icon="grid">Administrador</a>

			<nav data-role="navbar">
				<ul>
					<li><a href="#" data-icon="info" data-theme="b">Nosotros</a></li>
					<li><a href="#" data-icon="bars" data-theme="b">Reservas</a></li>
					<li><a href="#" data-icon="plus" data-theme="b">Contacto</a></li>
				</ul>
			</nav>
		</div>
		<!--contenido-->
		<div data-role="content">
			<img src="<?php echo base_url(); ?>/images/ingreso.jpg" style="height:400px;width:98%">
			<ul data-role="listview" data-inset="true" data-split-icon="gear" data-split-theme="a">
				<li data-role="list-divider">Entrada</li>
				<li>
				<a href="#">
					<img src="<?php echo base_url(); ?>/images/relajacion.jpg" style="height:100px;width:30%">
					<h2>Nuestra Piscina</h2>
					<p>Horarios: 9:00 am - 11:00 pm</p>
				</a>
				<a href="#promo" data-rel="popup" data-position-to="window" data-transition="slide">Mas informacion</a>
			</li>

			<li>
				<a href="#">
					<img src="<?php echo base_url(); ?>/images/hab.jpg" style="height:100px;width:30%">
					<h2>Nuestras Habitaciones</h2>
					<p>precios: desde $20.000 la noche hasta $70.000 </p>
				</a>
				<a href="#promo" data-rel="popup" data-position-to="window" data-transition="pop">Mas informacion</a>
			</li>

			<li>
				<a href="#">
					<img src="<?php echo base_url(); ?>/images/plan.jpg" style="height:100px;width:30%">
					<h2>Juegos extremos</h2>
					<p>juegos extremos de toda clase</p>
					<p>horarios: 2:00pm - 5:00pm</p>
				</a>
				<a href="#promo" data-rel="popup" data-position-to="window" data-transition="turn"></a>
			</li>
		</ul>
		<div data-role="popup" id="promo" data-theme="b" class="ui-content" data-overlay-theme="a">
			<h3>Para mas informacion</h3>
			<p>llamar a: 3106192173 - 3175464865<p>
				<img src="<?php echo base_url(); ?>/images/bebe.jpg">
			</div>
		</div>

    <script src="<?php echo base_url(); ?>Jquery.Mobile/jquery.js"></script>
	<script src="<?php echo base_url(); ?>Jquery.Mobile/themes/habitacion.min.css"></script>
	<script src="<?php echo base_url(); ?>Jquery.Mobile/jquery.mobile-1.4.5.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>
</html>
