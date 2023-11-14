<?php 
/*
Template Name: Candidat Accueil
*/
get_header();
?>

<div class="home-c page-pt">

    <!-- HERO -->
    <section class="hero hero-full">
        <div class="z-10 container xxl:max-w-none">
            <div class="lg:w-1/2 xl:w-5/12 hero-full__content">
                <h1 class="hero-title">Partenaire <br>de votre carrière</h1>
                <p class="hero-text hidden lg:block">Depuis 2003, nous accompagnons de manière professionnelle et conviviale les candidats et les entreprises sur des missions de recrutement en CDI, en CDD ou en intérim.</p>
                <div class="flex flex-col items-start lg:flex-row lg:items-center">
                    <a href="<?php echo get_site_url(); ?>/nos-offres" class="btn-primary btn-orange mt-4 mr-10">Voir nos offres</a>
                    <a href="<?php echo get_site_url(); ?>/entreprise/" class="btn-secondary btn-white mt-4">Vous êtes une entreprise ?</a>    
                </div>
            </div>
        </div>
        <div class="hero-full__img hero-home-candidat img-parallax"></div>
        <div class="overlay"></div>
        <div class="reveal bg-light"></div>
    </section>

    <!-- DERNIERES OFFRES -->
    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title lg:w-1/2">Postulez dès maintenant à nos dernières offres</h2>
            <div class="offre_a_la_une offre mt-10 lg:grid lg:grid-cols-2 lg:mt-24">
                <div class="offre_a_la_une__img" style="background-image:url(<?php echo get_field('photo')['sizes']['large']; ?>);"></div>
                <div class="offre_a_la_une__content bg-blue text-light relative">
                    <h2 class="h3-title"><?php the_field('titre_du_poste'); ?></h2>
                    <p class="py-4 lg:py-6"><?php the_field('accroche'); ?></p>
                    <p class="offre__legende localisation mb-2"><?php the_field('localisation'); ?></p>
                    <p class="offre__legende type"><?php the_field('type_de_contrat'); ?></p>
                    <a href="<?php the_field('lien_de_loffre'); ?>" class="btn-primary btn-white-2">Voir l'offre</a>
                </div>
            </div>
            <div class="liste-offres md:grid md:grid-cols-2 md:gap-6 lg:grid-cols-3 lg:gap-8 lg:mt-10">
                <?php
				$args = array(
                    'post_type' => 'post',
					'posts_per_page' => '3',
					'ignore_sticky_posts'    => true,
				);
				$query = new WP_Query( $args );

				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post();
						get_template_part( 'template-parts/offre-compact' );
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
    
    <!-- ESPACE INTERIMAIRE -->
    <section class="section-split">
        <div class="section-split__img-container">
            <div class="section-split__image img-parallax image__espace-interimaire"></div>
        </div>
        <div class="section-split__text py-10">
            <div class="container">
                <h2 class="h2-title">Intérimaire chez nous&nbsp;? Facilitez-vous la vie.</h2>
                <p class="hidden lg:block mt-8 lg:mt-10">Retrouvez dans l’espace intérimaire tous les liens et documents utiles au bon déroulement de votre mission.</p>
                <a href="<?php echo get_site_url(); ?>/espace-candidat" class="btn-primary btn-white mt-6 sm:mt-8 lg:mt-10">Espace intérimaire</a>    
            </div>
        </div>
    </section>
    
    <!-- LE BLOG -->
    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title lg:w-1/2">Conseils et infos sur le monde de l’emploi</h2>
            
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
                                'terms'    => array('candidat'),
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
    
    <!-- TEMOIGNAGES -->
    <?php 
        $args = array(
            'post_type' 				=> array( 'temoignage' ),
            'posts_per_page' 			=> '3',
            'tax_query'             => array(
                array(
                    'taxonomy' => 'type_temoignage',
                    'field'    => 'slug',
                    'terms'    => array('candidat'),
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
                <a href="<?php echo get_site_url(); ?>/temoignages" class="btn-primary btn-white-2 mt-10 lg:mt-16">Tous les avis</a>
            </div>      
        </div>
    </section>
    <?php
        endif;
        wp_reset_postdata();
    ?>
    
    <!-- ESPACE ENTREPRISE -->
    <section class="section-split">
        <div class="section-split__img-container">
            <div class="section-split__image img-parallax image__espace-entreprise"></div>
        </div>
        <div class="section-split__text py-10">
            <div class="container">
                <h2 class="h2-title">Vous êtes une <br>entreprise&nbsp;?</h2>
                <p class="hidden lg:block mt-8 lg:mt-10">Nous sommes votre partenaire de confiance depuis 2003, du recrutement clé en main au sourcing de candidats, dans les fonctions supports et industrie-ingénierie.</p>
                <a href="<?php echo get_site_url(); ?>/entreprise/services" class="btn-primary btn-white mt-6 sm:mt-8 lg:mt-10">Découvrir nos services</a>    
            </div>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande'); ?>


</div>


<?php get_footer(); ?>