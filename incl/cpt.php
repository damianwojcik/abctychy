<?php
function slide_post_type() {
  $labels = array(
      'name'                  => _x( 'Slajdy', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Slajd', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Slajdy', 'text_domain' ),
      'name_admin_bar'        => __( 'Slajdy', 'text_domain' ),
      'archives'              => __( 'Wszystkie slajdy', 'text_domain' ),
      'parent_item_colon'     => __( 'Slajd', 'text_domain' ),
      'all_items'             => __( 'Wszystkie slajdy', 'text_domain' ),
      'add_new_item'          => __( 'Dodaj nowy slajd', 'text_domain' ),
      'add_new'               => __( 'Dodaj nowy slajd', 'text_domain' ),
      'new_item'              => __( 'Dodaj nowy slajd', 'text_domain' ),
      'edit_item'             => __( 'Edytuj slajd', 'text_domain' ),
      'update_item'           => __( 'Aktualizuj slajd', 'text_domain' ),
      'view_item'             => __( 'Zobacz slajd', 'text_domain' ),
      'search_items'          => __( 'Wyszukaj slajd', 'text_domain' ),
      'not_found'             => __( 'Nie znaleziono slajdów', 'text_domain' ),
      'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
      'featured_image'        => __( 'Wyróżniony obrazek', 'text_domain' ),
      'set_featured_image'    => __( 'Ustaw wyróżniony obrazek', 'text_domain' ),
      'remove_featured_image' => __( 'Usuń wyróżniony obrazek', 'text_domain' ),
      'use_featured_image'    => __( 'Użyj jako wyróżniony obrazek', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
      'items_list'            => __( 'Items list', 'text_domain' ),
      'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $rewrite = array(
      'slug'                  => 'slajdy',
      'with_front'            => true,
      'pages'                 => true,
      'feeds'                 => true,
  );
  $args = array(
      'label'                 => __( 'Slajd', 'text_domain' ),
      'description'           => __( 'Opis slajdu', 'text_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 4,
      'menu_icon'             => 'dashicons-format-image',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'rewrite'               => $rewrite,
      'capability_type'       => 'page',
  );
  register_post_type( 'slide', $args );
}

add_action( 'init', 'slide_post_type', 0 );