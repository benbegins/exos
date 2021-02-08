<?php get_header("club-rh"); ?>


<div class="page-pt">

    <!-- TITRE & DATE -->
    <section class="section-pad">
        <div class="container md:flex md:items-center">
            <div class="md:w-2/3 lg:w-1/2">
                <p class="uppercase text-xs mb-4"><?php the_field('theme_general'); ?></p>
                <h1 class="h2-title relative">
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="w-1/2 ml-auto mt-20 md:w-1/4 md:mt-0">
                <div class="uppercase font-medium text-xs">
                    <p class="icon-webinar icon-calendar">Le <?php the_field('date'); ?></p>
                    <p class="icon-webinar icon-time my-2">De <?php the_field('heure_de_debut'); ?> à <?php the_field('heure_de_fin'); ?></p>
                    <p class="text-gray">Gratuit</p>  
                </div>

                <?php 
                $lien = get_field('lien');
                if($lien): 
                ?>
                <a href="<?php echo $lien; ?>" class="btn-primary btn-orange mt-4 no-transition" target="_blank">S'inscrire</a>
                <?php else: ?>
                <p class="mt-6 italic text-gray text-xs">Inscription bientôt disponible</p>    
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- CONTENU -->
    <section class="section-pad-bot">
        <div class="container">
            <div class="zone-text lg:w-2/3 lg:ml-auto">
                <img class="w-full" src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                <div class="mt-10 lg:mt-24 lg:pr-24">
                    <?php the_field('presentation'); ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- INTERVENANT -->
    <section class="intervenant mt-10">
        <div class="lg:max-w-screen-xxl lg:px-16 lg:mx-auto lg:flex lg:items-center">
            
            <!-- INTERVENANT -->
            <div class="pb-10 px-6 md:px-8 md:pb-20 lg:px-0 lg:pb-32 xxl:pb-48 text-dark lg:w-1/2">
                <?php
					$intervenants=get_the_terms($post->ID, 'intervenant'); 
                    $photo = get_field('photo', 'intervenant_' . $intervenants[0]->term_id);

                    if($photo):
                ?>

                <div class="rounded-md overflow-hidden inline-block -mt-10 max-w-xs">
                    <img class="w-full" src="<?php echo $photo['sizes']['medium']; ?>" alt="<?php echo $intervenants[0]->name; ?>">    
                </div>
                    <?php endif; ?>

                <h2 class="h2-title mt-10"><?php echo $intervenants[0]->name; ?></h2>
                <p class="mt-5"><?php echo $intervenants[0]->description; ?></p>
                
                <?php 
                $site_web = get_field('site_web', 'intervenant_' . $intervenants[0]->term_id);
                if($site_web):
                ?>
                <a href="<?php echo $site_web['url']; ?>" class="no-transition btn-secondary btn-dark mt-4" target="_blank">Son site web</a>
                <?php endif; ?>
            </div>
            
            <!-- INSCRIPTION -->
            <div class="bg-dark py-10 md:py-20 lg:p-0 flex flex-col items-center lg:w-1/4 lg:ml-auto">
                <div class="font-medium text-xs">
                    <p class="uppercase icon-webinar icon-calendar">Le <?php the_field('date'); ?></p>
                    <p class="uppercase icon-webinar icon-time my-2">De <?php the_field('heure_de_debut'); ?> à <?php the_field('heure_de_fin'); ?></p>
                    <p class="uppercase text-gray">Gratuit</p>  

                    <?php 
                    $lien = get_field('lien');
                    if($lien): 
                    ?>
                    <a href="<?php echo $lien; ?>" class="btn-primary btn-orange mt-4 text-base no-transition" target="_blank">S'inscrire</a>
                    <?php else: ?>
                    <p class="mt-6 italic text-gray">Inscription bientôt disponible</p>   
                    <?php endif; ?>
                </div>
            </div>    

        </div>
    </section>


    <!-- PROCHAINS WEBINAIRES -->
    <?php 
        $date_now = date('Y-m-d');
        $args = array(
            'post_type'             => 'conference',
            'ignore_sticky_posts'   => true,
            'paged'                 => $paged,
            'posts_per_page'        => '2',
            'post__not_in'          => array($post->ID),
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
    ?>
    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title mb-6 lg:mb-16">Nos prochains webinaires</h2>
            
                <?php 
                while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/webinar' );
                endwhile;
                ?>
                
            <div class="text-right">
                <a href="<?php echo get_site_url(); ?>/entreprise/club-rh" class="btn-primary btn-orange">Tous nos webinaires</a>
            </div>
        </div>
    </section>
    <?php
        endif;
    ?>



    <!-- QUESTION DEMANDE -->
    <div class="bg-light text-dark">
        <?php echo get_template_part('./template-parts/question-demande-entreprise'); ?>
    </div>

</div>


<?php get_footer('entreprise'); ?>