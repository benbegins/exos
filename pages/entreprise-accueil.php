<?php 
/*
Template Name: Entreprise Accueil
*/
get_header("entreprise");
?>

<div class="home-e page-pt">

    <section class="hero hero-full">
        <div class="z-10 container xxl:max-w-none">
            <div class="lg:w-1/2 xl:w-5/12 hero-full__content">
                <h1 class="hero-title">Votre <br>fournisseur <br>de talents</h1>
                <p class="hero-text hidden lg:block">Depuis 2003, nous accompagnons de manière professionnelle et conviviale les candidats et les entreprises sur des missions de recrutement en CDI, en CDD ou en intérim.</p>
                <div class="flex flex-col items-start lg:flex-row lg:items-center">
                    <a href="<?php echo get_site_url(); ?>/entreprise/contact" class="btn-primary btn-orange mt-4 mr-10">Nous confier une mission</a>
                    <a href="<?php echo get_site_url(); ?>" class="btn-secondary btn-white mt-4">Vous êtes un candidat ?</a>        
                </div>
            </div>
        </div>
        <div class="hero-full__img hero-home-entreprise img-parallax"></div>
        <div class="overlay"></div>
        <div class="reveal bg-light"></div>
    </section>

    <!-- DOMAINES D EXPERTISE -->
    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title">
                Nos domaines d'expertise
            </h2>
            <ul class="home-e__liste-services md:grid md:grid-cols-2 lg:grid-cols-4 lg:my-24">
                <li>
                    <div>
                        <img class="ml-auto md:mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-services-recrutement.svg" alt="Icone Aide au recrutement" width="137" height="102">
                    </div>
                    <h3 class="h3-title pl-2">Recrutement</h3>
                </li>
                <li>
                    <div>
                        <img class="ml-auto md:mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-services-interim_gestion.svg" alt="Icone Aide au recrutement" width="137" height="102">
                    </div>
                    <h3 class="h3-title pl-2">Interim en gestion</h3>
                </li>
                <li>
                    <div>
                        <img class="ml-auto md:mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-services-interim_delegation.svg" alt="Icone Aide au recrutement" width="137" height="102">
                    </div>
                    <h3 class="h3-title pl-2">Interim en délégation</h3>
                </li>
                <li>
                    <div>
                        <img class="ml-auto md:mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-services-aide_recrut.svg" alt="Icone Aide au recrutement" width="137" height="102">
                    </div>
                    <h3 class="h3-title pl-2">Aide au recrutement</h3>
                </li>
            </ul>
            <div class="text-right">
                <a href="<?php echo get_site_url(); ?>/entreprise/services" class="btn-primary btn-white mt-10 md:mt-16 lg:mt-0">Nos services en détails</a>
            </div>
        </div>
    </section>

    <!-- PARTENAIRE DE CONFIANCE -->
    <section class="section-imgtext section-pad-bot">
        <div class="overflow-hidden">
            <div class="section-imgtext__img-container img-equipe-01 img-parallax"></div>    
        </div>
        
        <div class="container">
            <div class="section-imgtext__text-container">
                <h2 class="h2-title mb-10">Partenaire de confiance depuis 2003</h2>
                <p class="mb-10">Nous sommes spécialisés dans le recrutement permanent (CDI) et temporaire (CDD, Intérim) d’employés et de cadres à travers 2 départements spécialisés : les fonctions supports et les fonctions industrie-ingénierie.</p>
                <p class="mb-10">Nous gérons plus de 150 recrutements par mois et 78% de nos clients travaillent avec nous depuis plus de 10 ans.</p>
                <div class="text-right">
                    <a href="<?php echo get_site_url(); ?>/entreprise/a-propos" class="btn-primary btn-white">Nous connaître</a>    
                </div>    
            </div>
        </div>
    </section>

    <!-- TEMOIGNAGES -->
    <?php 
        $args = array(
            'post_type' 				=> array( 'temoignage' ),
            'posts_per_page' 			=> '3',
            'tax_query'             => array(
                array(
                    'taxonomy' => 'type_temoignage',
                    'field'    => 'slug',
                    'terms'    => array('entreprise'),
                ),
            ),
        );
        $query = new WP_Query( $args );
        // 
        if ( $query->have_posts() ) : 
    ?>
    <section class="bg-blue section-pad">
        <div class="container">
            <h2 class="h1-title text-center text-light">Ils nous ont fait confiance</h2>
            
            <div class="text-right mt-6 lg:hidden">
                <div class="btn-pagination pagination-left-white pagination-left mr-2"></div>
                <div class="btn-pagination pagination-right-white pagination-right"></div>
            </div>    
        </div>
        
        <div class="swiper-container swiper-temoignages">
            <div class="lg:mt-16 swiper-wrapper">
                <?php
                    while ( $query->have_posts() ) { 
                        $query->the_post();
                        get_template_part( 'template-parts/temoignage');
                    }
                ?>
            </div>
        </div>
        
        <div class="container">
            <div class="text-right">
                <a href="<?php echo get_site_url(); ?>/entreprise/temoignages" class="btn-primary btn-white-2 mt-10 lg:mt-16">Tous les avis</a>
            </div>      
        </div>
    </section>
    <?php
        endif;
        wp_reset_postdata();
    ?>

    <!-- CLUB RH -->
    <section class="section-split">
        <div class="section-split__img-container">
            <div class="section-split__image img-parallax image__club-rh"></div>
        </div>
        
        <div class="section-split__text py-10">
            <div class="container">
                <div class="mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-club-rh.png" alt="Logo Club RH by Exos" width="130">
                </div>
                <h2 class="h2-title">Le rendez-vous des managers</h2>
                <p class="hidden lg:block mt-8 lg:mt-10">Le Club RH vous donne rendez-vous une fois par mois pour une conférence en ligne animée par un expert sur une thématique managériale.</p>
                <a href="<?php echo get_site_url(); ?>/entreprise/club-rh" class="btn-primary btn-white mt-6 sm:mt-8 lg:mt-10">Entrer dans le club</a>   
            </div>
        </div>
    </section>
    <section class="section-pad bg-dark text-light">
        <div class="container">
            <div class="lg:w-3/4 lg:mx-auto">
                <h2 class="h2-title">Nos prochains Webinaires</h2>
                <div class="border-b border-light border-opacity-25 mt-10">
                    <?php 
                    $date_now = date('Y-m-d');
                    $args = array(
                        'post_type' => 'conference',
                        'posts_per_page' => '3',
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
                    ?>

                    <a href="<?php the_permalink(); ?>" class="block border-t border-light border-opacity-25 py-10 lg:grid lg:grid-cols-10 lg:items-center lg:gap-12 hover:opacity-75 transition duration-200">
                        <h3 class="h3-title lg:col-span-5"><?php the_title(); ?></h3>
                        <div class="my-5 lg:my-0 lg:col-span-3">
                            <p class="text-gray">Le <?php the_field('date'); ?> de <?php the_field('heure_de_debut'); ?> à <?php the_field('heure_de_fin'); ?></p>
                            <p class="text-gray uppercase">Gratuit</p>     
                        </div>
                        <div class="lg:text-right lg:col-span-2">
                            <p class="btn-secondary btn-white">En savoir plus</p>    
                        </div>
                    </a>

                    <?php
                        endwhile;
                    endif;

                    wp_reset_postdata();
                    ?>
                </div>
                <div class="text-right">
                    <a href="<?php echo get_site_url(); ?>/entreprise/club-rh" class="btn-primary btn-white mt-6 sm:mt-8 lg:mt-10">Tous nos webinaires</a>     
                </div>
            </div>
        </div>
    </section>

    <!-- LE BLOG -->
    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title lg:w-1/2">Notre actualité</h2>
            
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
                        'tax_query'             => array(
                            array(
                                'taxonomy' => 'categorie',
                                'field'    => 'slug',
                                'terms'    => array('entreprise'),
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
                <a href="<?php echo get_site_url(); ?>/entreprise/blog" class="btn-primary btn-white">Voir plus d'articles</a>
            </div>
        </div>
    </section>

    <!-- NOUVEAU COLLABORATEUR -->
    <section class="section-split">
        <div class="section-split__img-container">
            <div class="section-split__image img-parallax image__collaborateur"></div>
        </div>
        
        <div class="section-split__text py-10">
            <div class="container">
                <h2 class="h2-title">Vous recherchez un nouveau collaborateur&nbsp;?</h2>
                <p class="hidden lg:block mt-8 lg:mt-10">N’hésitez pas à nous contacter pour en discuter et vous aider à trouver le meilleur profil.</p>
                <a href="<?php echo get_site_url(); ?>/entreprise/contact" class="btn-primary btn-white mt-6 sm:mt-8 lg:mt-10">Nous confier une mission</a>   
            </div>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande-entreprise'); ?>

</div>

<?php get_footer('entreprise'); ?>