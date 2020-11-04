<?php get_header(); ?>

<div class="page-pt">

	<!-- HERO -->
	<section class="hero hero-404 bg-no-repeat bg-cover relative">
        <div class="relative z-10 container xxl:max-w-none">
			<div class="md:w-3/5 md:ml-auto lg:w-1/2 hero-full__content text-light">
				<div class="py-32 lg:py-48 xl:py-64">
					<h1 class="hero-title h1-title">Hum, il n’y a rien ici…</h1>
					<p class="mt-4">Et si le destin vous y avait conduit pour voir nos dernières offres&nbsp;?</p>
				</div>
            </div> 
        </div>
        <div class="bg-dark absolute inset-0 opacity-25"></div>
	</section>
	
	<!-- NOS DERNIERES OFFRES -->
    <section class="section-pad-top">
        <div class="container">            
            <div class="liste-offres">
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

<?php
get_footer();
