<?php 
/*
Template Name: Candidat Nos Offres
*/
get_header();
?>

<div class="page-pt">

    <!-- RECHERCHE OFFRE -->
    <section class="section-pad bg-dark text-light">
        <div class="container lg:flex">
            <h1 class="h1-title lg:w-1/2">Trouver une offre</h1>
            <div class="mt-16 lg:mt-6 lg:w-1/3 lg:ml-auto">
                <input type="text" class="w-full h-16 px-6 rounded-md mb-4" placeholder="test">
                <input type="text" class="w-full h-16 px-6 rounded-md mb-4" placeholder="test">
                <input type="text" class="w-full h-16 px-6 rounded-md mb-4" placeholder="test">
                <input type="submit" value="Chercher" class="h-16 px-6 bg-orange text-dark rounded-md block ml-auto font-bold">
            </div>
        </div>
    </section>

    <!-- LISTE DES OFFRES -->
    <section class="section-pad">
        <div class="container">
            <?php 
            $args = array(
                'post_type'             => 'post',
                'ignore_sticky_posts'   => true,
                'paged'          => $paged,
				'posts_per_page' => '20',
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/offre-fullwidth' );
                endwhile;
            endif; 

            wp_reset_postdata();
            ?>
        </div>
    </section>

    <!-- AUCUNE OFFRE -->
    <section class="section-split">
        <div class="section-split__image image__aucune-offre"></div>
        <div class="section-split__text py-10">
            <div class="container">
                <h2 class="h2-title">Aucune offre ne vous correspond&nbsp;?</h2>
                <p class="hidden lg:block mt-8 lg:mt-10">Déposez une candidature spontanée et nous vous recontacterons si une offre correspond à votre profil.</p>
                <a href="<?php echo get_site_url(); ?>/candidature-spontanee" class="btn-primary btn-white mt-6 sm:mt-8 lg:mt-10">Candidature spontanée</a>    
            </div>
        </div>
    </section>
    
    <!-- LE BLOG -->
    <section class="section-pad-top">
        <div class="container">
            <h2 class="h2-title lg:w-1/2">Conseils et infos sur le monde de l’emploi</h2>
            
            <div class="text-right mt-6 lg:hidden">
                <div class="btn-pagination pagination-left-dark pagination-left-articles mr-2"></div>
                <div class="btn-pagination pagination-right-dark pagination-right-articles"></div>
            </div>
            
            <div class="swiper-articles swiper-container liste-articles md:mt-6 lg:mt-24">
                <div class="swiper-wrapper">
                    <?php
                        // LE BLOG
                        $args = array(
                            'post_type' 				=> array( 'articleblog' ),
                            'posts_per_page' 			=> '3',
                            'ignore_sticky_posts'    	=> true,
                        );
                        $query = new WP_Query( $args );
                        // 
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) { 
                                $query->the_post();
                                get_template_part( 'template-parts/article-blog');
                            }
                        }
                        wp_reset_postdata();
                    ?>    
                </div>
            </div>
            
            <div class="text-right mt-6 md:mt-10 lg:mt-24">
                <a href="<?php echo get_site_url(); ?>/le-blog" class="btn-primary btn-white">Voir plus d'articles</a>
            </div>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande'); ?>

</div>

<?php get_footer(); ?>