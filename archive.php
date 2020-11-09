<?php
get_header();
?>

<div class="page-pt">

    <!-- RECHERCHE OFFRE -->
    <section class="section-pad bg-dark text-light">
        <div class="container lg:flex">
            <h1 class="h1-title lg:w-1/2">Trouver une offre</h1>
            <div class="form mt-16 lg:mt-6 lg:w-1/3 lg:ml-auto">
                <?php echo do_shortcode('[searchandfilter slug="offres-demploi"]'); ?>
            </div>
        </div>
    </section>

    <!-- LISTE DES OFFRES -->
    <section class="section-pad" id="offres">
        <div class="container" id="main">
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
    

    <?php echo get_template_part('./template-parts/question-demande'); ?>

    <!-- SCROLL TO CONTENT -->
    <script>
        const offres = document.querySelector('#offres');
        window.scrollTo(0, offres.offsetTop);
    </script>

</div>

<?php get_footer(); ?>