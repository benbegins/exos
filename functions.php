<?php

// Configure les fonctionnalités de bases
function bemytheme_setup(){
    // Prise en charge des images de mise en avant
    add_theme_support('post-thumbnails');

    // Ajouter automatiquement le titre du site dans l'entete
    add_theme_support('title-tag');

    // Ajouts des menus
    register_nav_menus( array(
        'main' => 'Menu Principal',
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



/**
 * Customize administration
 */
require get_template_directory() . '/inc/administration.php';

