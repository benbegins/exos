<?php get_header(); ?>

<div class="page-pt offre-single">

    <!-- TITRE DE LA MISSION -->
    <section class="section-pad bg-dark text-light">
        <div class="container">
            <div class="lg:flex lg:items-center">
                <div class="lg:w-1/2">
                    <h1 class="h2-title">
                        <?php the_title(); ?>
                    </h1>    
                </div>
                <div class="mt-4 lg:mt-0 lg:w-1/4 lg:ml-auto">
                    <p class="offre-single__legende localisation"><?php the_field('localisation'); ?></p>
                    <p class="offre-single__legende type mt-3"><?php the_field('type_de_contrat'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container lg:flex lg:items-start">

            <!-- CONTENU MISSION -->
            <div class="lg:w-7/12">
                <?php if( get_field('mission') ): ?>
                <h2 class="h1-title">Mission</h2>
                <div class="zone-text zone-text__offre mt-10">
                    <?php the_field('mission'); ?>	
                </div>
                <?php endif; ?>    

                <?php if( get_field('requis') ): ?>
                <h2 class="h1-title mt-20">Requis</h2>
                <div class="zone-text zone-text__offre mt-10">
                    <?php the_field('requis'); ?>	
                </div>
                <?php endif; ?>        
            </div>

            <!-- COLLABORATEUR -->
            <?php 
            $collaborateur = get_field('collaborateur');
            if($collaborateur): 

            $prenom = get_field('prenom', $collaborateur->ID);
            $nom = get_field('nom', $collaborateur->ID);
            $telephone = get_field('telephone', $collaborateur->ID);
            $email = get_field('email', $collaborateur->ID);
            $photo = get_the_post_thumbnail_url($collaborateur->ID, 'medium');

            ?>
            <div class="hidden lg:block w-4/12 ml-auto mt-5">
                <a href="#postuler" class="btn-primary btn-orange w-full mb-10">Postuler</a>
                <div class="bg-dark text-light">
                    <div>
                        <img src="<?php echo $photo; ?>" alt="<?php echo $prenom . ' ' . $nom; ?>" class="w-full">
                    </div>
                    <div class="p-12">
                        <p class="h2-title">Besoin d'aide&nbsp;?</p>
                        <p class="mt-4">N'hésitez pas à contacter <?php echo $prenom; ?> pour en savoir plus.</p>
                        <p class="mt-2">Tel. <?php echo $telephone; ?></p>
                        <a href="<?php echo get_site_url(); ?>/mail?mail=<?php echo $email; ?>" class="btn-primary btn-white mt-4" id="mailto-collaborateur">Envoyer un mail</a>
                    </div>    
                </div>
                
            </div>

            <?php endif; ?>
        </div>
    </section>
    
    <!-- AVANTAGES -->
    <?php if( get_field('avantages') ): ?>
    <section class="section-pad bg-blue text-light offre__avantages">
        <div class="container">
            <div class="lg:w-7/12">
                <h2 class="h1-title">Avantages</h2>
                <div class="zone-text zone-text__offre mt-10">
                    <?php the_field('avantages'); ?>	
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- POSTULER A L OFFRE -->
    <section id="postuler" class="section-pad text-light relative overflow-hidden">
        <div class="container z-10 relative lg:flex lg:justify-center">
            <div class="lg:w-1/3 lg:mr-6">
                <h2 class="h2-title">Cette mission est faite pour vous&nbsp;?</h2>
                <p class="mt-4">Envoyez-nous votre candidature !</p>    
            </div>
            <div class="form mt-10 lg:w-1/3 lg:ml-6 lg:-mt-4">
                <?php echo do_shortcode('[forminator_form id="1279068"]'); ?>
            </div>
        </div>
        <div class="offre-single__candidature img-parallax"></div>
        <div class="overlay absolute inset-0 bg-dark opacity-50"></div>
    </section>

    <!-- COLLABORATEUR -->
    <?php 
    if($collaborateur): 
    ?>
    <section class="section-pad-top lg:hidden">
        <div class="container">
            <div class="bg-dark text-light md:flex md:items-center lg:block">
                <div class="md:w-1/2">
                    <img src="<?php echo $photo; ?>" alt="<?php echo $prenom . ' ' . $nom; ?>" class="w-full">
                </div>
                <div class="px-6 py-12 md:w-1/2 md:p-10">
                    <p class="h2-title">Besoin d'aide&nbsp;?</p>
                    <p class="mt-4">N'hésitez pas à contacter <?php echo $prenom; ?> pour en savoir plus.</p>
                    <p class="mt-2">Tel. <?php echo $telephone; ?></p>
                    <a href="<?php echo get_site_url(); ?>/mail?mail=<?php echo $email; ?>" class="btn-primary btn-white mt-4">Envoyer un mail</a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- OFFRE SIMILAIRE -->
    <?php
    // Récupère la liste des métiers (taxonomy) associés à l'offre
    $metiers = get_the_terms( $post->ID , 'metiers' );
    
    // Ajoute la liste des métiers dans un tableau $listeMetiers
    if(!empty($metiers)):
        $metiersLength = count($metiers);
        $listeMetiers = array();

        for ($i=0; $i < $metiersLength; $i++) { 
            array_push($listeMetiers, $metiers[$i]->slug);
        }
    endif;

    // Requête : 3 posts dans la même catégorie de métier
    $args = array(
        'post_type'             => 'post',
        'posts_per_page'        => '3',
        'ignore_sticky_posts'   => true,
        'post__not_in'          => array($post->ID),
        'tax_query'             => array(
                                        array(
                                            'taxonomy' => 'metiers',
                                            'field'    => 'slug',
                                            'terms'    => $listeMetiers,
                                        ),
        ),
    );
    $query = new WP_Query( $args );

    // S'il y a une offre similaire, on l'affiche (3 maximum)
    if ( $query->have_posts() ) :
    ?>
    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title">Nos offres similaires</h2>
            
            <div class="liste-offres lg:mt-16">
                <?php				
                while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/offre-fullwidth' );
                endwhile;
                ?>
            </div>
            <div class="mt-6 text-right lg:mt-16">
                <a href="<?php echo get_site_url(); ?>/nos-offres" class="btn-primary btn-white">Toutes nos offres</a>
            </div>
        </div>
    </section>
    <?php 
        endif;  
        wp_reset_postdata();
    ?>

    <!-- EGALITE DES CHANCES -->
    <section class="section-pad bg-white">
        <div class="container">
            <h2 class="h1-title text-blue lg:w-9/12 lg:ml-20">Engagé pour l'égalité des chances</h2>
            <p class="mt-10 md:w-2/3 md:ml-auto lg:w-5/12 lg:mr-20">Nous nous impliquons chaque jour dans la lutte contre les discriminations et pour l’égalité des chances. Vous ne serez évalué que sur vos compétences et nous travaillerons en toute transparence pour la réussite de votre carrière. Pour cette raison, nous avons signé la charte des intermédiaires de l’emploi pour l’égalité dans les recrutements.</p>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande'); ?>

    <div class="hidden" id="mail-collaborateur"><?php echo $email; ?></div>
    <script>
        const inputCollaborateur = document.querySelector('.input-collaborateur input');
        const emailCollaborateur = document.querySelector('#mail-collaborateur');
        inputCollaborateur.value = emailCollaborateur.textContent;
    </script>

</div>

<?php get_footer(); ?>