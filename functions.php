<?php

// Configure les fonctionnalités de bases
function bemytheme_setup(){
    // Prise en charge des images de mise en avant
    add_theme_support('post-thumbnails');

    // Ajouter automatiquement le titre du site dans l'entete
    add_theme_support('title-tag');

    // Ajouts des menus
    register_nav_menus( array(
        'menu-candidat' => 'Menu Candidat',
        'menu-entreprise' => 'Menu Entreprise',
        'menu-club-rh' => 'Menu Club RH',
    ) );
}
add_action( 'after_setup_theme', 'bemytheme_setup' );

// Ajout des scripts
function bemytheme_register_assets(){
    // CSS
    wp_enqueue_style( 
        'bemytheme', 
        get_stylesheet_uri( ),
        array(),
        '1.0'
    );
    // JS
    wp_enqueue_script( 
        'bemytheme', 
        get_template_directory_uri() . '/dist/app.js', 
        array(),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'bemytheme_register_assets');


// Custom image size
add_image_size( 'xl', 1440);
add_image_size( 'xxl', 1900);

/**
 * Customize administration
 */
require get_template_directory() . '/inc/administration.php';

/**
 * Custom excerpt length
 */
function custom_excerpt_length( $length ) {
    return 25;
  }
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

