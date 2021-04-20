<?php

	add_theme_support( 'post-thumbnails' );

	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	add_action( 'wp_footer', 'enqueue_scripts' );


	function enqueue_styles() {
		wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap', '', NULL);
		wp_enqueue_style( 'normalize', THEME_URL .'/assets/css/normalize.css', '', NULL);
		wp_enqueue_style( 'swiper', THEME_URL .'/assets/css/swiper-bundle.min.css', '', NULL);
		wp_enqueue_style( 'site_styles', THEME_URL .'/style.css', '', NULL);
	}


	function enqueue_scripts() {
		wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'swiper', THEME_URL . '/assets/js/swiper-bundle.min.js', '', NULL);
		wp_enqueue_script( 'site_scripts', THEME_URL . '/scripts.js', '', NULL);
	}