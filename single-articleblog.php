<?php 
// Récupère la catégorie de l'article
$categories = get_the_terms( $post->ID , 'categorie' );
// Si la catégorie correspond à entreprise, 
// on affiche le header correspondant
if($categories[0]->slug == "entreprise"){
    get_header('entreprise');
} else {
    get_header();
}
?>


<div class="page-pt">

    <section class="section-pad">
        <div class="container">
            <a 
            href="<?php 
                if($categories[0]->slug == "entreprise"){
                    echo get_site_url() . '/entreprise/blog';
                } else {
                    echo get_site_url() . '/le-blog';
                } 
            ?>" 
            class="btn-secondary btn-back text-blue mb-10">Tous les articles</a>
            <h1 class="h1-title lg:w-2/3 relative">
                <?php the_title(); ?>
                <div class="reveal-text bg-dark"></div>
            </h1>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="zone-text lg:w-2/3 lg:ml-auto">
                <img class="w-full" src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                <div class="mt-10 lg:mt-24 lg:pr-24">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- A LIRE AUSSI -->
    <section class="section-pad-top">
        <div class="container">
            <h2 class="h2-title lg:w-1/2">À lire aussi</h2>
            
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
                        'post__not_in'              => array($post->ID),
                        'tax_query'             => array(
                            array(
                                'taxonomy' => 'categorie',
                                'field'    => 'slug',
                                'terms'    => array($categories[0]->slug),
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


<?php 
if($categories[0]->slug == "entreprise"){
    get_footer('entreprise');
} else {
    get_footer();
}
?>