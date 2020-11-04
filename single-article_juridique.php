<?php get_header("club-rh"); ?>


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

    <section class="section-pad">
        <div class="container">
            <a href="<?php echo get_site_url(); ?>/entreprise/club-rh/veille-juridique" class="btn-secondary btn-back text-orange mb-10">Retour aux articles</a>
            <h1 class="h1-title lg:w-2/3 relative">
                <?php the_title(); ?>
            </h1>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="zone-text lg:w-2/3 lg:ml-auto lg:pr-24">
                <?php the_field('article'); ?>
            </div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title lg:w-1/2 md:mb-10">À lire aussi</h2>

            <div class="lg:grid lg:grid-cols-3 lg:gap-x-6">
                <?php 
                $args = array(
                    'post_type'             => 'article_juridique',
                    'ignore_sticky_posts'   => true,
                    'paged'          => $paged,
                    'posts_per_page' => '3',
                    'post__not_in'              => array($post->ID),
                );
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post();
                        get_template_part('./template-parts/article-juridique');
                    endwhile;
                endif;
                ?>    
            </div>
            
            <div class="text-right mt-4 md:mt-10">
                <a href="<?php echo get_site_url(); ?>/entreprise/club-rh/veille-juridique" class="btn-primary btn-dark">Voir plus d'articles</a>
            </div>
        </div>
    </section>

    <?php endif; ?>
    <!-- FIN ZONE PROTEGEE -->

    <!-- QUESTION DEMANDE -->
    <div class="bg-light text-dark">
        <?php echo get_template_part('./template-parts/question-demande-entreprise'); ?>
    </div>

</div>


<?php get_footer('entreprise'); ?>