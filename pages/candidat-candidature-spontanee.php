<?php 
/*
Template Name: Candidat Candidature Spontanée
*/
get_header();
?>

<div class="page-pt">

    <section class="section-pad">
        <div class="container lg:flex">
            <div class="lg:w-1/2">
                <h1 class="h1-title">Déposer une candidature spontanée</h1>
                <p class="mt-10">Remplissez le formulaire pour nous envoyer votre candidature. Votre CV sera conservé et nous ne manquerons pas de vous contacter si une mission correspond à votre profil.</p>
            </div>
            <div class="form mt-20 lg:w-1/3 lg:ml-auto lg:mt-0">
                <?php echo do_shortcode('[forminator_form id="1279070"]'); ?>
            </div>
        </div>
    </section>

    <!-- NOS DERNIERES OFFRES -->
    <section>
        <div class="container">
            <h2 class="h2-title lg:w-1/2">Postulez dès maintenant à nos dernières offres</h2>
            
            <div class="liste-offres lg:mt-16">
                <?php
                // Requête : 3 derniers posts
                $args = array(
                    'post_type'             => 'post',
                    'posts_per_page'        => '3',
                    'ignore_sticky_posts'   => true,
                );
                $query = new WP_Query( $args );
                // Affichage des dernieres offres
                if ( $query->have_posts() ) :	
                    while ( $query->have_posts() ) : $query->the_post();
                        get_template_part( 'template-parts/offre-fullwidth' );
                    endwhile;
                endif;  
                wp_reset_postdata();
                ?>
            </div>
            <div class="mt-6 text-right lg:mt-16">
                <a href="<?php echo get_site_url(); ?>/nos-offres" class="btn-primary btn-white">Toutes nos offres</a>
            </div>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande'); ?>

</div>

<?php get_footer(); ?>