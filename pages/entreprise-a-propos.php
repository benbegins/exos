<?php 
/*
Template Name: Entreprise À Propos
*/
get_header("entreprise");
?>

<div class="page-pt">

    <section class="section-pad">
        <div class="container">
            <h1 class="h1-title lg:w-3/4 relative">
                Fournisseur de talents depuis 2002
            </h1>
        </div>
    </section>

    <!-- VIDEO BFM -->
    <section>
        <div class="lg:max-w-screen-xxl lg:px-40 lg:mx-auto">
            <div class="a-propos__video-container">
                <iframe class="w-full h-full" src="https://player.vimeo.com/video/377815274" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>    
        </div>
    </section>
    
    <!-- SECTEURS D'ACTIVITE -->
    <section class="section-pad">
        <div class="container">
            <p class="lg:w-1/3 lg:mx-auto">EXOS est spécialisé dans le recrutement permanent (CDI) et temporaire (CDD, Intérim) d’employés et de cadres à travers 2 départements spécialisés :</p>
            <!-- Fonctions supports -->
            <div class="flex mt-10 lg:w-7/12 lg:ml-auto lg:mt-24">
                <div class="w-1/4 md:w-1/6">
                    <p class="font-display font-extrabold text-2xl -mt-1 lg:mt-0">01</p>
                </div>
                <div class="w-3/4 md:w-5/6 md:flex">
                    <h2 class="h2-title mb-3 md:w-1/2">Fonctions support</h2>
                    <ul class="uppercase text-gray md:w-1/3 md:ml-auto">
                        <li class="mb-3">Administratif</li>
                        <li class="mb-3">Comptabilité</li>
                        <li class="mb-3">Juridique</li>
                        <li class="mb-3">Commercial</li>
                        <li class="mb-3">Communication</li>
                        <li class="mb-3">Ressources humaines</li>
                    </ul>
                </div>
            </div>
            <!-- Fonctions industrie -->
            <div class="flex mt-10 lg:w-7/12 lg:ml-auto lg:mt-20">
                <div class="w-1/4 md:w-1/6">
                    <p class="font-display font-extrabold text-2xl -mt-1 lg:mt-0">02</p>
                </div>
                <div class="w-3/4 md:w-5/6 md:flex">
                    <h2 class="h2-title mb-3 md:w-1/2">Industrie-ingénierie</h2>
                    <ul class="uppercase text-gray md:w-1/3 md:ml-auto">
                        <li class="mb-3">Techniciens</li>
                        <li class="mb-3">Ingénieurs</li>
                        <li class="mb-3">Bureaux d'études</li>
                        <li class="mb-3">Magasiniers</li>
                    </ul>
                </div>
            </div>

            <div class="text-right">
                <a href="<?php echo get_site_url(); ?>/entreprise/services" class="btn-primary btn-white mt-10 lg:mt-20">Découvrir nos services</a>
            </div>
        </div>
    </section>

    <!-- EN CHIFFRES -->
    <section class="section-pad-bot">
        <div class="container">
            <h2 class="h1-title">Exos en chiffres</h2>
            <div class="a-propos__chiffres__list text-center md:flex md:flex-wrap md:mt-16">

                <div class="a-propos__chiffres__item md:w-1/2 lg:w-1/3 md:py-16 lg:py-32">
                    <p class="a-propos__chiffres__chiffre">78%</p>
                    <p class="a-propos__chiffres__text">de clients fidèles depuis plus de 10 ans</p>
                </div>
                
                <div class="a-propos__chiffres__item md:w-1/2 lg:w-2/3 md:py-16 lg:py-32">
                    <p class="a-propos__chiffres__chiffre chiffre-3000">3000</p>
                    <p class="a-propos__chiffres__text lg:text-xl">contrats gérés par an</p>
                </div>

                <div class="a-propos__chiffres__item md:w-1/2 md:py-16">
                    <p class="a-propos__chiffres__chiffre">36%</p>
                    <p class="a-propos__chiffres__text">de nos intérimaires présents depuis plus de 3 ans</p>
                </div>

                <div class="a-propos__chiffres__item md:w-1/2 md:py-16">
                    <p class="a-propos__chiffres__chiffre">150</p>
                    <p class="a-propos__chiffres__text">recrutements par mois</p>
                </div>

            </div>
        </div>
    </section>

    <!-- PHOTO LOCAUX -->
    <section class="section-imgtext">
        <div class="overflow-hidden">
            <div class="section-imgtext__img-container img-locaux-01 img-parallax"></div>
        </div>
        <div class="container">
            <div class="section-imgtext__text-container">
                <p>Dirigé par une équipe de plus de 25 ans d’expérience dans le recrutement et la gestion des ressources humaines, Exos s’est donné comme mission de rechercher pour ses clients les meilleurs collaborateurs potentiels.</p>
            </div>
        </div>
    </section>
    
    <!-- NOTRE HISTOIRE -->
    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title">Notre histoire</h2>
            <ul class="mt-10 lg:mt-20 lg:w-7/12 lg:ml-20">
                
                <li class="histoire__item">
                    <div class="histoire__date">
                        <p class="text-xs">2001</p>
                    </div>
                    <div class="histoire__text">
                        <h3 class="h3-title">Création d'Exos Intérim</h3>
                        <p>Spécialisée dans l’intérim des fonctions tertiaires en Ile-de-France</p>
                    </div>
                </li>

                <li class="histoire__item">
                    <div class="histoire__date">
                        <p class="text-xs">2013</p>
                    </div>
                    <div class="histoire__text">
                        <h3 class="h3-title">Reprise par Sylviane Béjoint et Christian Beghyn</h3>
                        <p>Exos Interim devient Exos et développe le recrutement de cadres</p>
                    </div>
                </li>

                <li class="histoire__item">
                    <div class="histoire__date">
                        <p class="text-xs">2015</p>
                    </div>
                    <div class="histoire__text">
                        <h3 class="h3-title">Reprise de la société F&H en Missions</h3>
                        <p>Spécialisée dans l’intérim et le recrutement des fonctions support</p>
                    </div>
                </li>

                <li class="histoire__item">
                    <div class="histoire__date">
                        <p class="text-xs">2017</p>
                    </div>
                    <div class="histoire__text">
                        <h3 class="h3-title">Reprise de la société Inopia Finance</h3>
                        <p>Spécialisée dans l’intérim et le recrutement des fonctions Finance, Paie et Comptabilité</p>
                    </div>
                </li>

                <li class="histoire__item">
                    <div class="histoire__date">
                        <p class="text-xs">2020</p>
                    </div>
                    <div class="histoire__text">
                        <h3 class="h3-title">Reprise de la société SearchProTech</h3>
                        <p>Spécialisée depuis 2012 dans l’intérim et le recrutement des fonctions industrie-ingénierie</p>
                    </div>
                </li>
                 
            </ul>
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


    <!-- L'EQUIPE -->
    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title">L'équipe</h2>
            <ul class="a-propos__equipe__list mt-10 grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 lg:gap-8">
            <?php
            $args = array(
                'post_type'         => array('collaborateur'),
                'order'             => "ASC",
            );
            $query = new WP_Query ($args);

            if ($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post();
            ?>

                <li class="a-propos__equipe__item">
                    <div class="a-propos__equipe__photo" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>')"></div>
                    <div class="p-6 lg:p-10">
                        <p class="uppercase font-extrabold"><?php echo get_field('prenom') . ' ' . get_field('nom'); ?></p>
                        <p class="text-blue font-bold text-xs mt-1"><?php the_field('poste'); ?></p>       
                    </div>
                </li>
            
            <?php
                endwhile;
            endif;
            wp_reset_postdata(); 
            ?>
            </ul>
        </div>
    </section>


    <!-- NOUVEAU COLLABORATEUR -->
    <section class="section-imgtext">
        <div class="overflow-hidden">
            <div class="section-imgtext__img-container img-locaux-02 img-parallax"></div>
        </div>
        
        <div class="container">
            <div class="section-imgtext__text-container">
                <h2 class="h2-title mb-10">Vous rechercher un nouveau collaborateur&nbsp;?</h2>
                <p>N’hésitez pas à nous contacter pour en discuter : nous saurons vous accompagner pour trouver LE profil que vous recherchez !</p>
                <div class="text-right mt-10">
                    <a href="<?php echo get_site_url(); ?>/entreprise/contact" class="btn-primary btn-white">Nous confier une mission</a>    
                </div>
            </div>
        </div>
    </section>


    <?php echo get_template_part('./template-parts/question-demande-entreprise'); ?>

</div>

<?php get_footer('entreprise'); ?>