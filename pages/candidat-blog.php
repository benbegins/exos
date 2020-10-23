<?php 
/*
Template Name: Candidat Blog
*/
get_header();
?>

<div class="page-pt">

    <section class="hero-split">
            <div class="hero-split__img hero-blog"></div>
            <div class="hero-split__text">
                <div class="container">
                    <h1 class="h1-title">Conseils & actus</h1>
                    <p class="mt-6">L’actualité de l’emploi et les meilleurs conseils de nos experts.</p>
                </div>
            </div>
    </section>

    <section class="section-pad">
        <div class="container">
        <?php 
            $args = array(
                'post_type'             => 'articleblog',
                'ignore_sticky_posts'   => true,
                'paged'          => $paged,
				'posts_per_page' => '10',
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/article-blog-fullwidth' );
                endwhile;
            endif; 

            wp_reset_postdata();
        ?>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande'); ?>

</div>

<?php get_footer(); ?>