<?php

/*
// Rename default Post-Type
*/

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Offres d\'emploi';
    $submenu['edit.php'][5][0] = 'Les offres d\'emploi';
    $submenu['edit.php'][10][0] = 'Ajouter une offre';
    $submenu['edit.php'][16][0] = 'Etiquettes';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Les offres d\'emploi';
    $labels->singular_name = 'Offre d\'emploi';
    $labels->add_new = 'Ajouter une offre  d\'emploi';
    $labels->add_new_item = 'Ajouter une offre  d\'emploi';
    $labels->edit_item = 'Modifier l\'offre d\'emploi';
    $labels->new_item = 'Offres d\'emploi';
    $labels->view_item = 'Voir l\'offre d\'emploi';
    $labels->search_items = 'Chercher une offre d\'emploi';
    $labels->not_found = 'Aucune offre trouvée';
    $labels->not_found_in_trash = 'Aucune offre trouvée dans la corbeille';
    $labels->all_items = 'Toutes les offres d\'emploi';
    $labels->menu_name = 'Offres d\'emploi';
	$labels->name_admin_bar = 'Offres d\'emploi';
}
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

/*
// Rename the default category taxonomy
*/
function renameCategory() {
    global $wp_taxonomies;
    $cat = $wp_taxonomies['category'];
    $cat->label = 'Secteurs d\'activité';
    $cat->labels->singular_name = 'Secteur d\'activité';
    $cat->labels->name = $cat->label;
    $cat->labels->menu_name = $cat->label;
    $cat->labels->add_new = 'Ajouter un secteur d\'activité';
    $cat->labels->add_new_item = 'Ajouter un secteur d\'activité';
    $cat->labels->edit_item = 'Editer un secteur d\'activité';
    $cat->labels->new_item = 'Secteur d\'activité';
    $cat->labels->view_item = 'Voir le secteur d\'activité';
    $cat->labels->search_items = 'Rechercher un secteur d\'activité';
    $cat->labels->not_found = 'Aucune secteur d\'activité trouvé';
    $cat->labels->not_found_in_trash = 'Auncun secteur d\'activité trouvé dans la corbeille';
    $cat->labels->all_items = 'Tous les secteurs d\'activité';
    $cat->labels->name_admin_bar = 'Secteur d\'activité';
}
add_action('init', 'renameCategory');

/*
// Add Métier category
*/
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Services', 'text_domain' ),
		'all_items'                  => __( 'Tous les services', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Nouveau service', 'text_domain' ),
		'add_new_item'               => __( 'Ajouter un service', 'text_domain' ),
		'edit_item'                  => __( 'Editer un service', 'text_domain' ),
		'update_item'                => __( 'Mettre a jour le service', 'text_domain' ),
		'view_item'                  => __( 'Voir le service', 'text_domain' ),
		'separate_items_with_commas' => __( 'Séparez les services avec un espace', 'text_domain' ),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer des services', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés', 'text_domain' ),
		'popular_items'              => __( 'Services populaires', 'text_domain' ),
		'search_items'               => __( 'Chercher un service', 'text_domain' ),
		'not_found'                  => __( 'Rien trouvé', 'text_domain' ),
		'no_terms'                   => __( 'Pas de métier', 'text_domain' ),
		'items_list'                 => __( 'Liste des services', 'text_domain' ),
		'items_list_navigation'      => __( 'Liste des services', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'				=> true,
	);
	register_taxonomy( 'metiers', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );



/*
// Add Articles post type
*/
function blog_article_type() {

	$labels = array(
		'name'                  => _x( 'Articles', 'Post Type General Name', 'exos' ),
		'singular_name'         => _x( 'Article', 'Post Type Singular Name', 'exos' ),
		'menu_name'             => __( 'Blog', 'exos' ),
		'name_admin_bar'        => __( 'Blog', 'exos' ),
		'archives'              => __( 'Articles', 'exos' ),
		'attributes'            => __( 'Item Attributes', 'exos' ),
		'parent_item_colon'     => __( 'Parent Item:', 'exos' ),
		'all_items'             => __( 'Tous les articles', 'exos' ),
		'add_new_item'          => __( 'Ajouter un nouve article', 'exos' ),
		'add_new'               => __( 'Ajouter un article', 'exos' ),
		'new_item'              => __( 'Nouvel article', 'exos' ),
		'edit_item'             => __( 'Modifier un article', 'exos' ),
		'update_item'           => __( 'Mettre à jour un article', 'exos' ),
		'view_item'             => __( 'Voir l\'article', 'exos' ),
		'view_items'            => __( 'Voir les articles', 'exos' ),
		'search_items'          => __( 'Rechercher un article', 'exos' ),
		'not_found'             => __( 'Rien trouvé', 'exos' ),
		'not_found_in_trash'    => __( 'Rien dans la corbeille', 'exos' ),
		'featured_image'        => __( 'Image à la une', 'exos' ),
		'set_featured_image'    => __( 'Mettre une image à la une', 'exos' ),
		'remove_featured_image' => __( 'Supprimer l\'image à la une', 'exos' ),
		'use_featured_image'    => __( 'Utiliser comme image à la une', 'exos' ),
		'insert_into_item'      => __( 'Insert into item', 'exos' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'exos' ),
		'items_list'            => __( 'Items list', 'exos' ),
		'items_list_navigation' => __( 'Items list navigation', 'exos' ),
		'filter_items_list'     => __( 'Filter items list', 'exos' ),
	);
	$args = array(
		'label'                 => __( 'Article', 'exos' ),
		'description'           => __( 'Article de blog', 'exos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-edit-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'articleblog', $args );

}
add_action( 'init', 'blog_article_type', 0 );



/*
// Catégorie d'articles de blog
*/
function categorie_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'exos' ),
		'singular_name'              => _x( 'Catégorie', 'Taxonomy Singular Name', 'exos' ),
		'menu_name'                  => __( 'Categories', 'exos' ),
		'all_items'                  => __( 'Toutes les catégories', 'exos' ),
		'parent_item'                => __( 'Parent Item', 'exos' ),
		'parent_item_colon'          => __( 'Parent Item:', 'exos' ),
		'new_item_name'              => __( 'Nouvelle catégorie', 'exos' ),
		'add_new_item'               => __( 'Ajouter une catégorie', 'exos' ),
		'edit_item'                  => __( 'Editer la catégorie', 'exos' ),
		'update_item'                => __( 'Mettre à jour la catégorie', 'exos' ),
		'view_item'                  => __( 'Voir la catégorie', 'exos' ),
		'separate_items_with_commas' => __( 'Séparer les catégories par des virgules', 'exos' ),
		'add_or_remove_items'        => __( 'Ajouter/Supprimer des catégories', 'exos' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisées', 'exos' ),
		'popular_items'              => __( 'Populaires', 'exos' ),
		'search_items'               => __( 'Rechercher des catégories', 'exos' ),
		'not_found'                  => __( 'Rien trouvé', 'exos' ),
		'no_terms'                   => __( 'Pas de catégorie', 'exos' ),
		'items_list'                 => __( 'Liste des catégories', 'exos' ),
		'items_list_navigation'      => __( 'Items list navigation', 'exos' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'categorie', array( 'articleblog' ), $args );

}
add_action( 'init', 'categorie_taxonomy', 0 );



/*
// Add Conference Post Type
*/
function conference_post_type() {

	$labels = array(
		'name'                  => _x( 'Webinars', 'Post Type General Name', 'exos' ),
		'singular_name'         => _x( 'Webinar', 'Post Type Singular Name', 'exos' ),
		'menu_name'             => __( 'Webinars', 'exos' ),
		'name_admin_bar'        => __( 'Webinar', 'exos' ),
		'archives'              => __( 'Archives webinars', 'exos' ),
		'attributes'            => __( 'Attributes webinar', 'exos' ),
		'parent_item_colon'     => __( 'Parent Item:', 'exos' ),
		'all_items'             => __( 'Toutes les webinars', 'exos' ),
		'add_new_item'          => __( 'Ajouter un webinar', 'exos' ),
		'add_new'               => __( 'Ajouter un nouveau webinar', 'exos' ),
		'new_item'              => __( 'Nouvelle webinar', 'exos' ),
		'edit_item'             => __( 'Editer le webinar', 'exos' ),
		'update_item'           => __( 'Mettre à jour la webinar', 'exos' ),
		'view_item'             => __( 'Voir le webinar', 'exos' ),
		'view_items'            => __( 'Voir les webinars', 'exos' ),
		'search_items'          => __( 'Recherche une webinar', 'exos' ),
		'not_found'             => __( 'Rien trouvé', 'exos' ),
		'not_found_in_trash'    => __( 'Rien dans la corbeille', 'exos' ),
		'featured_image'        => __( 'Image principale', 'exos' ),
		'set_featured_image'    => __( 'Définir une image principale', 'exos' ),
		'remove_featured_image' => __( 'Supprimer l\'image principale', 'exos' ),
		'use_featured_image'    => __( 'Utiliser comme image principale', 'exos' ),
		'insert_into_item'      => __( 'Insérer dans le webinar', 'exos' ),
		'uploaded_to_this_item' => __( 'Charger dans cet item', 'exos' ),
		'items_list'            => __( 'Listes des items', 'exos' ),
		'items_list_navigation' => __( 'Items list navigation', 'exos' ),
		'filter_items_list'     => __( 'Filter items list', 'exos' ),
	);
	$args = array(
		'label'                 => __( 'Webinar', 'exos' ),
		'description'           => __( 'Webinar Club RH', 'exos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'intervenant' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'conference', $args );

}
add_action( 'init', 'conference_post_type', 0 );




/*
// Register Intervenant taxonomy
*/
function intervenant_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Intervenants', 'Taxonomy General Name', 'exos' ),
		'singular_name'              => _x( 'Intervenant', 'Taxonomy Singular Name', 'exos' ),
		'menu_name'                  => __( 'Intervenants', 'exos' ),
		'all_items'                  => __( 'Tous les intervenants', 'exos' ),
		'parent_item'                => __( 'Parent Item', 'exos' ),
		'parent_item_colon'          => __( 'Parent Item:', 'exos' ),
		'new_item_name'              => __( 'Nouvel intervenant', 'exos' ),
		'add_new_item'               => __( 'Ajouter un intervenant', 'exos' ),
		'edit_item'                  => __( 'Editer l\'intervenant', 'exos' ),
		'update_item'                => __( 'Mettre à jour l\'intervenant', 'exos' ),
		'view_item'                  => __( 'Voir l\'intervenant', 'exos' ),
		'separate_items_with_commas' => __( 'Séparer les intervenants par des virgules', 'exos' ),
		'add_or_remove_items'        => __( 'Ajouter/Supprimer des intervenants', 'exos' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés', 'exos' ),
		'popular_items'              => __( 'Populaires', 'exos' ),
		'search_items'               => __( 'Rechercher des intervenants', 'exos' ),
		'not_found'                  => __( 'Rien trouvé', 'exos' ),
		'no_terms'                   => __( 'Pas d\'intervenant', 'exos' ),
		'items_list'                 => __( 'Liste des intervenants', 'exos' ),
		'items_list_navigation'      => __( 'Items list navigation', 'exos' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'intervenant', array( 'conference' ), $args );

}
add_action( 'init', 'intervenant_taxonomy', 0 );



/*
// Add Temoignages Post Type
*/
function temoignage_post_type() {

	$labels = array(
		'name'                  => _x( 'Témoignages', 'Post Type General Name', 'exos' ),
		'singular_name'         => _x( 'Témoignage', 'Post Type Singular Name', 'exos' ),
		'menu_name'             => __( 'Témoignages', 'exos' ),
		'name_admin_bar'        => __( 'Témoignage', 'exos' ),
		'archives'              => __( 'Archives témoignages', 'exos' ),
		'attributes'            => __( 'Attributes témoignages', 'exos' ),
		'parent_item_colon'     => __( 'Parent Item:', 'exos' ),
		'all_items'             => __( 'Tous les témoignages', 'exos' ),
		'add_new_item'          => __( 'Ajouter un témoignages', 'exos' ),
		'add_new'               => __( 'Ajouter nouveau témoignage', 'exos' ),
		'new_item'              => __( 'Nouveau témoignages', 'exos' ),
		'edit_item'             => __( 'Editer le témoignage', 'exos' ),
		'update_item'           => __( 'Mettre à jour le témoignage', 'exos' ),
		'view_item'             => __( 'Voir le témoignage', 'exos' ),
		'view_items'            => __( 'Voir les témoignages', 'exos' ),
		'search_items'          => __( 'Rechercher un témoignage', 'exos' ),
		'not_found'             => __( 'Rien trouvé', 'exos' ),
		'not_found_in_trash'    => __( 'Rien dans la corbeille', 'exos' ),
		'featured_image'        => __( 'Image principale', 'exos' ),
		'set_featured_image'    => __( 'Définir une image principale', 'exos' ),
		'remove_featured_image' => __( 'Supprimer l\'image principale', 'exos' ),
		'use_featured_image'    => __( 'Utiliser comme image principale', 'exos' ),
		'insert_into_item'      => __( 'Insérer dans le témoignage', 'exos' ),
		'uploaded_to_this_item' => __( 'Charger dans cet item', 'exos' ),
		'items_list'            => __( 'Liste des témoignages', 'exos' ),
		'items_list_navigation' => __( 'Items list navigation', 'exos' ),
		'filter_items_list'     => __( 'Filtrer la liste des témoignages', 'exos' ),
	);
	$args = array(
		'label'                 => __( 'Témoignage', 'exos' ),
		'description'           => __( 'Témoignage', 'exos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'temoignage', $args );

}
add_action( 'init', 'temoignage_post_type', 0 );



/*
// Categorie de témoignages taxonomy
*/
function type_temoignage_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Types de témoignages', 'Taxonomy General Name', 'exos' ),
		'singular_name'              => _x( 'Type de témoignage', 'Taxonomy Singular Name', 'exos' ),
		'menu_name'                  => __( 'Types de témoignages', 'exos' ),
		'all_items'                  => __( 'Tous les types de témoignages', 'exos' ),
		'parent_item'                => __( 'Parent Item', 'exos' ),
		'parent_item_colon'          => __( 'Parent Item:', 'exos' ),
		'new_item_name'              => __( 'Nouveau type de témoignage', 'exos' ),
		'add_new_item'               => __( 'Ajouter un type de témoignage', 'exos' ),
		'edit_item'                  => __( 'Editer le type de témoignage', 'exos' ),
		'update_item'                => __( 'Mettre à jour le type de témoignage', 'exos' ),
		'view_item'                  => __( 'Voir le type de témoignage', 'exos' ),
		'separate_items_with_commas' => __( 'Séparer les types de témoignages par des virgules', 'exos' ),
		'add_or_remove_items'        => __( 'Ajouter/Supprimer des types de témoignages', 'exos' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés', 'exos' ),
		'popular_items'              => __( 'Populaires', 'exos' ),
		'search_items'               => __( 'Rechercher des types de témoignages', 'exos' ),
		'not_found'                  => __( 'Rien trouvé', 'exos' ),
		'no_terms'                   => __( 'Pas de type de témoignage', 'exos' ),
		'items_list'                 => __( 'Liste des types de témoignages', 'exos' ),
		'items_list_navigation'      => __( 'Items list navigation', 'exos' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'type_temoignage', array( 'temoignage' ), $args );

}
add_action( 'init', 'type_temoignage_taxonomy', 0 );




/*
// Add article_juridique Post Type
*/
function article_juridique_post_type() {

	$labels = array(
		'name'                  => _x( 'Articles juridiques', 'Post Type General Name', 'exos' ),
		'singular_name'         => _x( 'Article juridique', 'Post Type Singular Name', 'exos' ),
		'menu_name'             => __( 'Veille juridique', 'exos' ),
		'name_admin_bar'        => __( 'Article juridique', 'exos' ),
		'archives'              => __( 'Archives articles', 'exos' ),
		'attributes'            => __( 'Attributes articles', 'exos' ),
		'parent_item_colon'     => __( 'Parent Item:', 'exos' ),
		'all_items'             => __( 'Tous les articles', 'exos' ),
		'add_new_item'          => __( 'Ajouter un articles', 'exos' ),
		'add_new'               => __( 'Ajouter nouvel article', 'exos' ),
		'new_item'              => __( 'Nouvel article', 'exos' ),
		'edit_item'             => __( 'Editer article', 'exos' ),
		'update_item'           => __( 'Mettre à jour le article', 'exos' ),
		'view_item'             => __( 'Voir le article', 'exos' ),
		'view_items'            => __( 'Voir les articles', 'exos' ),
		'search_items'          => __( 'Rechercher un article', 'exos' ),
		'not_found'             => __( 'Rien trouvé', 'exos' ),
		'not_found_in_trash'    => __( 'Rien dans la corbeille', 'exos' ),
		'featured_image'        => __( 'Image principale', 'exos' ),
		'set_featured_image'    => __( 'Définir une image principale', 'exos' ),
		'remove_featured_image' => __( 'Supprimer l\'image principale', 'exos' ),
		'use_featured_image'    => __( 'Utiliser comme image principale', 'exos' ),
		'insert_into_item'      => __( 'Insérer dans l article', 'exos' ),
		'uploaded_to_this_item' => __( 'Charger dans cet item', 'exos' ),
		'items_list'            => __( 'Liste des articles', 'exos' ),
		'items_list_navigation' => __( 'Items list navigation', 'exos' ),
		'filter_items_list'     => __( 'Filtrer la liste des articles', 'exos' ),
	);
	$args = array(
		'label'                 => __( 'Article juridique', 'exos' ),
		'description'           => __( 'Article juridique', 'exos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields'),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'show_in_rest'          => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'article_juridique', $args );

}
add_action( 'init', 'article_juridique_post_type', 0 );



/*
// Add collaborateur Post Type
*/
function collaborateur() {

	$labels = array(
		'name'                  => _x( 'Collaborateurs', 'Post Type General Name', 'exos' ),
		'singular_name'         => _x( 'Collaborateur', 'Post Type Singular Name', 'exos' ),
		'menu_name'             => __( 'Collaborateurs', 'exos' ),
		'name_admin_bar'        => __( 'Collaborateurs', 'exos' ),
		'archives'              => __( 'Archives', 'exos' ),
		'attributes'            => __( 'Item Attributes', 'exos' ),
		'parent_item_colon'     => __( 'Parent Item:', 'exos' ),
		'all_items'             => __( 'Tous les collaborateurs', 'exos' ),
		'add_new_item'          => __( 'Ajouter un collaborateur', 'exos' ),
		'add_new'               => __( 'Ajouter nouveau', 'exos' ),
		'new_item'              => __( 'Nouveau collaborateur', 'exos' ),
		'edit_item'             => __( 'Editer collaborateur', 'exos' ),
		'update_item'           => __( 'Mettre à jour le collaborateur', 'exos' ),
		'view_item'             => __( 'Voir le collaborateur', 'exos' ),
		'view_items'            => __( 'Voir les collaborateurs', 'exos' ),
		'search_items'          => __( 'Rechercher un collaborateur', 'exos' ),
		'not_found'             => __( 'Rien trouvé', 'exos' ),
		'not_found_in_trash'    => __( 'Rien dans la corbeille', 'exos' ),
		'featured_image'        => __( 'Photo', 'exos' ),
		'set_featured_image'    => __( 'Associer une photo', 'exos' ),
		'remove_featured_image' => __( 'Retirer la photo', 'exos' ),
		'use_featured_image'    => __( 'Utiliser comme photo', 'exos' ),
		'insert_into_item'      => __( 'Insert into item', 'exos' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'exos' ),
		'items_list'            => __( 'Listes des collaborateurs', 'exos' ),
		'items_list_navigation' => __( 'Liste', 'exos' ),
		'filter_items_list'     => __( 'Filtrer la liste des collaborateurs', 'exos' ),
	);
	$args = array(
		'label'                 => __( 'Collaborateur', 'exos' ),
		'description'           => __( 'Collaborateurs Exos', 'exos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'show_in_rest'          => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'collaborateur', $args );

}
add_action( 'init', 'collaborateur', 0 );



/*
// Add dossier candidature
*/
function dossier_candidature_post_type() {

	$labels = array(
		'name'                  => _x( 'Dossiers Candidatures', 'Post Type General Name', 'exos' ),
		'singular_name'         => _x( 'Dossier de Candidature', 'Post Type Singular Name', 'exos' ),
		'menu_name'             => __( 'Dossiers de Candidature', 'exos' ),
		'name_admin_bar'        => __( 'Dossier de Candidature', 'exos' ),
		'archives'              => __( 'Archives Dossiers de Candidatures', 'exos' ),
		'attributes'            => __( 'Attributs dossiers', 'exos' ),
		'parent_item_colon'     => __( 'Parent Item:', 'exos' ),
		'all_items'             => __( 'Tous les dossiers', 'exos' ),
		'add_new_item'          => __( 'Ajouter un nouveau dossier', 'exos' ),
		'add_new'               => __( 'Créer un nouveau dossier', 'exos' ),
		'new_item'              => __( 'Nouveau dossier', 'exos' ),
		'edit_item'             => __( 'Editer le dossier de candidature', 'exos' ),
		'update_item'           => __( 'Mettre à jour le dossier', 'exos' ),
		'view_item'             => __( 'Voir le dossier', 'exos' ),
		'view_items'            => __( 'Voir les dossiers', 'exos' ),
		'search_items'          => __( 'Rechercher un dossier', 'exos' ),
		'not_found'             => __( 'Rien trouvé', 'exos' ),
		'not_found_in_trash'    => __( 'Rien dans la corbeille', 'exos' ),
		'featured_image'        => __( 'Image principale', 'exos' ),
		'set_featured_image'    => __( 'Définir une image principale', 'exos' ),
		'remove_featured_image' => __( 'Supprimer l\'image principale', 'exos' ),
		'use_featured_image'    => __( 'Utiliser comme image principale', 'exos' ),
		'insert_into_item'      => __( 'Insérer dans le dossier', 'exos' ),
		'uploaded_to_this_item' => __( 'Charger dans ce dossier', 'exos' ),
		'items_list'            => __( 'Liste des dossiers de candidature', 'exos' ),
		'items_list_navigation' => __( 'Items list navigation', 'exos' ),
		'filter_items_list'     => __( 'Filtrer la liste des dossiers', 'exos' ),
	);
	$args = array(
		'label'                 => __( 'Dossier Candidature', 'exos' ),
		'description'           => __( 'Dossier Candidature', 'exos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields'),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'show_in_rest'          => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dossier_candidature', $args );

}
add_action( 'init', 'dossier_candidature_post_type', 0 );


/*
// Remove editor support for post post type
*/
function remove_editor_support() {
	remove_post_type_support( 'post', 'editor' );
}
add_action( 'init', 'remove_editor_support' );