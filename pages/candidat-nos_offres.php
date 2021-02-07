<?php 
/*
Template Name: Candidat Nos Offres
*/
get_header();
?>

<div class="page-pt">

    <!-- RECHERCHE OFFRE -->
    <section class="section-pad bg-dark text-light relative">
        <div class="container lg:flex">
            <h1 class="h1-title lg:w-1/2">
                Trouver une offre
            </h1>
            <div class="form mt-16 lg:mt-6 lg:w-1/3 lg:ml-auto filtre-offres">
                <?php echo do_shortcode('[searchandfilter slug="offres-demploi"]'); ?>
            </div>
        </div>
    </section>

    <!-- LISTE DES OFFRES -->
    <section class="" id="offres">
        <div class="container section-pad" id="main">
            <?php
            $args = array('post_type' => 'post');
            $args['search_filter_id'] = 1279083;
            $query = new WP_Query($args);

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/offre-fullwidth' );
                endwhile;
            else :
                echo 'Pas de résultat';
            endif;

            wp_reset_postdata();
            ?>

            <!-- PAGINATION -->
            <div class="pagination mt-16">
                <div class="pagination__list">
                <?php
                    $big = 999999999;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $query->max_num_pages,
                        'show_all' => true,
                        'prev_next' => false
                    ) );
                ?>        
                </div>
            </div>

            
        </div>
    </section>

    <!-- AUCUNE OFFRE -->
    <section class="section-split">
        <div class="section-split__img-container">
            <div class="section-split__image img-parallax image__aucune-offre"></div>
        </div>
        
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
        </div>

        <div class="swiper-articles swiper-container liste-articles lg:mt-24">
            <div class="swiper-wrapper">
                <?php
                    // LE BLOG
                    $args = array(
                        'post_type' 				=> array( 'articleblog' ),
                        'posts_per_page' 			=> '3',
                        'ignore_sticky_posts'    	=> true,
                        'tax_query'             => array(
                            array(
                                'taxonomy' => 'categorie',
                                'field'    => 'slug',
                                'terms'    => array('candidat'),
                            ),
                        ),
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

        <div class="container">
            <div class="text-right mt-6 md:mt-10 lg:mt-24">
                <a href="<?php echo get_site_url(); ?>/le-blog" class="btn-primary btn-white">Voir plus d'articles</a>
            </div>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande'); ?>

</div>

<?php get_footer(); ?>