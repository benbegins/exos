<?php 
/*
Template Name: Club RH Revue des talents
*/
get_header("club-rh");
?>

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
    
    <section class="hero-split hero-split-club-rh">
            <div class="overflow-hidden">
                <div class="hero-split__img hero-revue-talents img-parallax"></div>
            </div>
            
            <div class="hero-split__text">
                <div class="container">
                    <h1 class="hero-title opacity-0">Revue des talents</h1>
                    <p class="mt-6 hero-text opacity-0">Vous recherchez vos Collaborateurs de demain ? Cliquez sur la fonction qui vous intéresse. Pour une mise en relation ou une demande d’information, contactez Jérôme Trybou.</p>
                    <a href="<?php echo get_site_url(); ?>/mail?mail=jerome" class="btn-primary btn-orange my-4 no-transition">Écrire un mail</a>
                    <p>Tel. 01 40 19 72 75</p>
                </div>
            </div>
    </section>

    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title">Cliquez sur la fonction ciblée</h2>
            <p class="mt-4">Et découvrez les candidats Exos du Trimestre.</p>
            <div class="club-rh__talent-list mt-10 lg:grid lg:grid-cols-6 lg:gap-x-6">
                <div class="revue-talent__cat lg:col-span-6">
                    <a class="revue-talent__item" href="<?php the_field('direction_generale'); ?>" target="_blank">Direction générale <br>Business Unit</a>
                </div>
                <div class="revue-talent__cat">
                    <a class="revue-talent__item" href="<?php the_field('assistanat_de_direction'); ?>" target="_blank">Assistanat de Direction</a>
                    <a class="revue-talent__item" href="<?php the_field('back_office'); ?>" target="_blank">Back Office</a>
                    <a class="revue-talent__item" href="<?php the_field('hotes_et_hotesse_accueil'); ?>" target="_blank">Hôtes & Hôtesses d'accueil</a>
                </div>
                <div class="revue-talent__cat">
                    <a class="revue-talent__item" href="<?php the_field('drh'); ?>" target="_blank">DRH</a>
                    <a class="revue-talent__item" href="<?php the_field('responsable_paie'); ?>" target="_blank">Responsable Paie</a>
                    <a class="revue-talent__item" href="<?php the_field('rrh'); ?>" target="_blank">RRH</a>
                    <a class="revue-talent__item" href="<?php the_field('gestionnaire_paie'); ?>" target="_blank">Gestionnaire Paie</a>
                </div>
                <div class="revue-talent__cat">
                    <a class="revue-talent__item" href="<?php the_field('direction_financiere_daf'); ?>" target="_blank">Direction financière <br>DAF</a>
                    <a class="revue-talent__item" href="<?php the_field('responsable_comptable'); ?>" target="_blank">Responsable comptable</a>
                    <a class="revue-talent__item" href="<?php the_field('audit_controle_de_gestion'); ?>" target="_blank">Audit contrôle de gestion</a>
                    <a class="revue-talent__item" href="<?php the_field('comptable_general'); ?>" target="_blank">Comptable général</a>
                    <a class="revue-talent__item" href="<?php the_field('comptables_auxiliaire'); ?>" target="_blank">Comptables Auxiliaire <br>Clients/Fournisseurs <br>Recouvrement</a>
                </div>
                <div class="revue-talent__cat">
                    <a class="revue-talent__item" href="<?php the_field('direction_commerciale'); ?>" target="_blank">Direction commerciale</a>
                    <a class="revue-talent__item" href="<?php the_field('equipe_adv'); ?>" target="_blank">Equipe ADV</a>
                </div>
                <div class="revue-talent__cat">
                    <a class="revue-talent__item" href="<?php the_field('direction_mkg_et_communication'); ?>" target="_blank">Direction MKG & Communication</a>
                    <a class="revue-talent__item" href="<?php the_field('charge_de_communication'); ?>" target="_blank">Chargé.es de communication</a>
                    <a class="revue-talent__item" href="<?php the_field('webdesigners'); ?>" target="_blank">Webdesigners</a>
                </div>
                <div class="revue-talent__cat">
                    <a class="revue-talent__item" href="<?php the_field('direction_juridique'); ?>" target="_blank">Direction Juridique</a>
                    <a class="revue-talent__item" href="<?php the_field('juristes'); ?>" target="_blank">Juristes</a>
                </div>
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