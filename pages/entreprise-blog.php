<?php 
/*
Template Name: Entreprise Blog
*/
get_header("entreprise");
?>

<div class="page-pt">

    <section class="hero-split">
            <div class="hero-split__img hero-blog"></div>
            <div class="hero-split__text">
                <div class="container">
                    <h1 class="hero-title opacity-0">Actualités</h1>
                    <p class="mt-6 hero-text opacity-0">Suivez l’actualité d’Exos et les insights de nos experts sur le monde de l’emploi.</p>
                </div>
            </div>
    </section>

    <section class="section-pad-top" id="articles">
        <div class="container">
        <?php 
            $args = array(
                'post_type'             => 'articleblog',
                'ignore_sticky_posts'   => true,
                'paged'          => $paged,
                'posts_per_page' => '10',
                'tax_query'             => array(
                    array(
                        'taxonomy' => 'categorie',
                        'field'    => 'slug',
                        'terms'    => array('entreprise'),
                    ),
                ),
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/article-blog-fullwidth' );
                endwhile;
            endif;
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

            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande'); ?>

    <!-- SCROLL TO CONTENT IF IS_PAGED=TRUE -->
    <?php if(is_paged()):?>
    <script>
        const offres = document.querySelector('#articles');
        window.scrollTo(0, offres.offsetTop);
    </script>
    <?php endif; ?>

</div>

<?php get_footer('entreprise'); ?>