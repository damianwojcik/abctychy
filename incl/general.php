<?php

	add_theme_support( 'post-thumbnails' );

	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	add_action( 'wp_footer', 'enqueue_scripts' );


	function enqueue_styles() {
		wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap', '', NULL);
		wp_enqueue_style( 'normalize', THEME_URL .'/assets/css/normalize.css', '', NULL);
		wp_enqueue_style( 'swiper', THEME_URL .'/assets/css/swiper-bundle.min.css', '', NULL);
		wp_enqueue_style( 'lightbox', THEME_URL .'/assets/css/lightbox.min.css', '', NULL);
		wp_enqueue_style( 'site_styles', THEME_URL .'/style.min.css', '', NULL);
		wp_enqueue_style( 'print', THEME_URL .'/assets/css/print.css', '', NULL, 'print');
	}


	function enqueue_scripts() {
		wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'swiper', THEME_URL . '/assets/js/swiper-bundle.min.js', '', NULL);
    wp_enqueue_script( 'lightbox', THEME_URL . '/assets/js/lightbox.min.js', '', NULL);
		wp_enqueue_script( 'site_scripts', THEME_URL . '/scripts.min.js', '', NULL);
	}

	function change_post_menu_label() {
    global $menu, $submenu;

    $menu[5][0] = 'Oferty';
    $submenu['edit.php'][5][0] = 'Oferty';
    $submenu['edit.php'][10][0] = 'Nowa Oferta';
    $submenu['edit.php'][16][0] = 'Oferty tagi';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_object_label() {
    global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Oferty';
    $labels->singular_name = 'Oferta';
    $labels->add_new = 'Nowa Oferta';
    $labels->add_new_item = 'Nowa Oferta';
    $labels->edit_item = 'Edytuj Ofertę';
    $labels->new_item = 'Nowa Oferta';
    $labels->view_item = 'Zobacz Ofertę';
    $labels->search_items = 'Szukaj Oferty';
    $labels->not_found = 'Nie znaleziono Oferty';
    $labels->not_found_in_trash = 'Oferty nie ma w koszu';
}
add_action( 'init', 'change_post_object_label' );