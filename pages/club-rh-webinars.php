<?php 
/*
Template Name: Club RH Webinars
*/
get_header("club-rh");
?>

<div class="page-pt">

    <!-- CONNEXION -->
    <?php if(post_password_required( )): ?>

    <section class="section-pad">
        <div class="container">
            <div class="md:flex xl:w-10/12 xl:mx-auto xl:justify-between">
                <div class="md:w-1/2 md:pr-6 xl:w-2/5">
                    <h2 class="h2-title">Connectez-vous</h2>
                    <div class="form mt-10">
                        <?php echo get_the_password_form(); ?> 
                    </div>
                </div>
                <div class="mt-20 md:mt-0 md:w-1/2 md:pl-6 xl:w-2/5">
                    <p>Vous n’êtes pas encore membre ? Demandez votre mot de passe gratuitement :</p>
                    <div class="form mt-10">
                        <?php echo do_shortcode('[forminator_form id="1279072"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DEBUT ZONE PROTEGEE -->
    <?php else: ?>

    <section class="hero-split hero-split-club-rh">
        <div class="overflow-hidden">
            <div class="hero-split__img hero-webinars img-parallax"></div>    
        </div>
            
        <div class="hero-split__text">
            <div class="container">
                <h1 class="hero-title opacity-0">Nos Webinars</h1>
                <p class="mt-6 hero-text opacity-0">Le Club RH vous donne rendez-vous une fois par mois pour une conférence en ligne animée par un expert sur une thématique managériale.</p>
            </div>
        </div>
    </section>

    <section class="section-pad" id="webinars">
        <div class="container">
        <?php 
            $date_now = date('Y-m-d');
            $args = array(
                'post_type'             => 'conference',
                'ignore_sticky_posts'   => true,
                'paged'                 => $paged,
                'posts_per_page'        => '10',
                'meta_key' => 'date',
                'orderby' => 'meta_value',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key'           => 'date',
                        'compare'       => '>=',
                        'value'         => $date_now,
                        'type'          => 'DATETIME',
                    )                   
                )
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/webinar' );
                endwhile;
            endif;
            ?>

            <!-- PAGINATION -->
            <div class="pagination pagination-club-rh mt-16">
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

    <?php endif; ?>
    <!-- FIN ZONE PROTEGEE -->

    <!-- QUESTION DEMANDE -->
    <div class="bg-light text-dark">
        <?php echo get_template_part('./template-parts/question-demande-entreprise'); ?>
    </div>

    <!-- SCROLL TO CONTENT IF IS_PAGED=TRUE -->
    <?php if(is_paged()):?>
    <script>
        const offres = document.querySelector('#webinars');
        window.scrollTo(0, offres.offsetTop);
    </script>
    <?php endif; ?>

</div>

<?php get_footer('entreprise'); ?>