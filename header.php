<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header">
	<div class="container">
		<a href="<?= SITE_URL; ?>" class="logo">
			<img src="<?= THEME_URL; ?>/assets/img/logo.png" alt="Logo ABC Nieruchmości">
		</a>
		<div class="wrap">
			<span>Telefon</span>
			<ul class="phones">
				<li>
					<a href="tel: 790749356">+48 790 749 356</a>
				</li>
				<li>
					<a href="tel: 608234299">+48 608 234 299</a>
				</li>
			</ul>
		</div>
		<!-- /.wrap -->
	</div>
	<!-- /.container -->
</div>
<!-- /.header -->
<div class="nav">
	<div class="container">
		<?php wp_nav_menu( array(
			'menu'   => 'Menu główne',
			'menu_class' => 'menu',
			'container' => false
		) ) ?>
		<!-- <ul class="menu">
			<li><a href="#">Strona Główna</a></li>
			<li><a href="#">O firmie</a></li>
			<li>
				<a href="#">Oferta</a>
				<ul class="sub-menu">
					<li><a href="#">Mieszkania</a></li>
					<li><a href="#">Domy</a></li>
				</ul>
			</li>
			<li><a href="#">Kredyty</a></li>
			<li><a href="#">Kontakt</a></li>
			<li><a href="#">RODO</a></li>
		</ul> -->
		<div class="toggle">
			<span class="toggle__line"></span>
			<span class="toggle__line"></span>
			<span class="toggle__line"></span>
		</div>
	</div>
	<!-- /.container -->
</div>
<!-- /.nav -->