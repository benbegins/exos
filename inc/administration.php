<?php
/**
 * exos Admin Customizer
 *
 * @package exos
 */

/**
 * Filter post by author
*/
function rudr_filter_by_the_author() {
	$params = array(
		'name' => 'author', // this is the "name" attribute for filter <select>
		'show_option_all' => 'Tous les auteurs' // label for all authors (display posts without filter)
	);
 
	if ( isset($_GET['user']) )
		$params['selected'] = $_GET['user']; // choose selected user by $_GET variable
 
	wp_dropdown_users( $params ); // print the ready author list
}
 
add_action('restrict_manage_posts', 'rudr_filter_by_the_author');



/**
 * Remove H1 from tinyMCE
 */
function remove_h1_from_heading($args) {
	$args['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Pre=pre';
	return $args;
}
add_filter('tiny_mce_before_init', 'remove_h1_from_heading' );




/*
 * Ajoute le champ collaborateur dans les colonnes de l'admin
 */
add_filter( 'manage_post_posts_columns', 'exos_offres_columns' );
function exos_offres_columns( $columns ) {
  
    $columns['collaborateur'] = __( 'Collaborateur' );
    return $columns;
  
}

add_action( 'manage_post_posts_custom_column', 'exos_offres_column', 10, 2);
function exos_offres_column( $column, $post_id ) {
  if ( 'collaborateur' === $column ) {
    $collaborateur = get_field('collaborateur', $post_id);
    if($collaborateur){
        echo get_field('prenom', $collaborateur->ID);
    }
  }
}