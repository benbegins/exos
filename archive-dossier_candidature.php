<?php

// Check if user is an editor or an administrator
if( !current_user_can( 'administrator' ) && !current_user_can( 'editor' ) ){
    wp_redirect( get_site_url());
    exit;
}

get_header();
?>


<div class="page-pt liste-dossiers-candidature">

    <section class="section-pad">
        <div class="container">
            <h1 class="h1-title">Liste des dossiers de candidature</h1>
            <a class="btn-primary btn-white mt-10" href="<?php echo get_site_url(); ?>/creation-dossier-candidature/">Créer un nouveau dossier</a>
            
        </div>
    </section>

    <section class="section-pad-bot" id="dossiers">
        <div class="container mb-16">
            <div class="bg-dark bg-opacity-15 p-10 rounded-xl">
                <div class="search form">
                    <?php echo do_shortcode('[searchandfilter slug="dossier-de-candidatures"]'); ?>
                </div>     
            </div>
        </div>
        
        <div class="container" id="liste-dossiers">
            <?php
            $args = array(
                'post_type'         => 'dossier_candidature',
                'posts_per_page'    => 20,
                'paged' => $paged
            );
            $query = new WP_Query($args);

            if ( have_posts() ) :

                $dossier_precedent = '';
                while ( have_posts() ) : the_post();

                    $nom = get_field('nom_dusage');
                    $date = get_the_date("d/m/Y");

                    // Vérifie que le dossier n'est pas un doublon
                    if($nom !== $dossier_precedent):
                        $dossier_precedent = $nom;
            ?>

                    <a class="liste-dossiers-candidature__item" href="<?php the_permalink(); ?>">
                        <p class="item-title"><?php the_title(); ?></p>
                        <p class="item-date"><?php echo $date; ?></p>
                        <div class="icon-arrow"></div>
                    </a>

            <?php
                    else:
                        // Supprime le dossier en doublon
                        wp_delete_post($post->ID);
                    endif;
                endwhile;
            else :
                echo 'Pas de dossier à afficher ou correspondant à la recherche';
            endif;

            wp_reset_postdata();
            ?>

            <!-- PAGINATION -->
            <div class="pagination mt-16">
                <div class="pagination__list">
                <?php
                    the_posts_pagination();
                ?>        
                </div>
            </div>
        </div>
    </section>

</div>

<!-- SCROLL TO CONTENT IF IS_PAGED=TRUE -->
<?php if(is_paged()):?>
    <script>
        const dossiers = document.querySelector('#dossiers');
        window.scrollTo(0, dossiers.offsetTop);
    </script>
<?php endif; ?>

<?php get_footer(); ?>