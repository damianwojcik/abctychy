<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="<?= THEME_URL; ?>/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= THEME_URL; ?>/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= THEME_URL; ?>/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= THEME_URL; ?>/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= THEME_URL; ?>/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= THEME_URL; ?>/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= THEME_URL; ?>/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= THEME_URL; ?>/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= THEME_URL; ?>/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?= THEME_URL; ?>/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= THEME_URL; ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= THEME_URL; ?>/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= THEME_URL; ?>/favicon-16x16.png">
	<link rel="manifest" href="<?= THEME_URL; ?>/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?= THEME_URL; ?>/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
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