<?php 
/*
Template Name: Entreprise Temoignages
*/
get_header('entreprise');
?>

<div class="page-pt">

    <section class="hero-split">
            <div class="overflow-hidden">
                <div class="hero-split__img hero-temoignages img-parallax"></div>
            </div>
            
            <div class="hero-split__text">
                <div class="container">
                    <h1 class="h1-title">Témoignages et avis</h1>
                    <p class="mt-6">Ils ont aimé travailler avec nous et ils vous le font savoir.</p>
                </div>
            </div>
    </section>

    <section class="section-pad-top" id="temoignages">
        <div class="container lg:w-2/3">
            <div class="text-right">
                <a href="<?php echo get_site_url(); ?>/rediger-avis" class="btn-primary btn-orange">Ecrire un avis</a>
            </div>
            <div>
                <?php 
                $args = array(
                    'post_type'         => array('temoignage'),
                    'paged'          => $paged,
                    'posts_per_page' => '15',
                    'tax_query'             => array(
                        array(
                            'taxonomy' => 'type_temoignage',
                            'field'    => 'slug',
                            'terms'    => array('entreprise'),
                        ),
                    ),
                );
                $query = new WP_Query ($args);

                if ($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                ?>

                <div class="pt-10 lg:py-10">
                    <div class="bg-white p-6 relative temoignage__icon-white box-shadow">
                        <p><?php the_field('contenu_temoignage'); ?></p>
                    </div>
                    <p class="h3-title mt-6"><?php the_field('auteur_temoignage'); ?></p>
                </div>

                <?php
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
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande'); ?>

    <!-- SCROLL TO CONTENT IF IS_PAGED=TRUE -->
    <?php if(is_paged()):?>
    <script>
        const offres = document.querySelector('#temoignages');
        window.scrollTo(0, offres.offsetTop);
    </script>
    <?php endif; ?>

</div>

<?php get_footer('entreprise'); ?>