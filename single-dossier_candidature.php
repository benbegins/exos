<?php

// Check if user is an editor or an administrator
if( !current_user_can( 'administrator' ) && !current_user_can( 'editor' ) ){
    wp_redirect( get_site_url());
    exit;
}

get_header('blank');
?>


<div class="single-dossier-candidature">

    <header>
        <div class="container py-16 print:py-0">
            <div class="relative">
                <img src="<?php echo get_template_directory_uri(  ); ?>/dist/img/logo-exos.svg" alt="Logo Exos">
                <div class="print:hidden absolute left-0 inset-y-0 flex items-center">
                    <a class="btn-secondary btn-back text-blue" href="<?php echo get_site_url() . '/' . get_post_type(); ?>">Retour à la liste de dossiers</a>    
                </div>    
            </div>
            
        </div>
    </header>

    <section class="section-pad bg-blue text-light print:bg-white print:text-dark">
        <div class="container">
            <p class="font-bold leading-none -mb-2 text-lg print:text-xs">Dossier de candidature</p>
            <h1 class="dossier-h1-title lg:w-3/4"><?php the_title(); ?></h1>
            <div class="print:hidden flex items-center mt-10">
                <button class="btn-primary btn-white-2 mr-10" onClick="window.print()">Imprimer / exporter</button>
                <?php $edit_link = get_edit_post_link(); ?>
                <a class="btn-secondary btn-white no-transition" href="<?php echo $edit_link; ?>">Editer le dossier</a>
            </div>
        </div>
    </section>

    <!-- Contrat recherché -->
    <section class="section-pad print:pt-0">
        <div class="container">
            <div class="item">
                <p class="item__label">Poste recherché : </p>
                <p class="item__text"><?php the_field('poste'); ?></p>
            </div>
            <div class="item">
                <p class="item__label">Disponibilité : </p>
                <p class="item__text"><?php the_field('disponibilite'); ?></p>
            </div>
            <div class="item">
                <p class="item__label">Préavis (en mois) : </p>
                <p class="item__text"><?php the_field('preavis'); ?></p>
            </div>
            <div class="item">
                <p class="item__label">Type de contrat recherché : </p>
                <p class="item__text"><?php the_field('type_de_contrat'); ?></p>
            </div>
            <div class="item">
                <p class="item__label">Type(s) d’organisation(s) de travail accepté(s) : </p>
                <p class="item__text"><?php the_field('type_dorganisation'); ?></p>
            </div>
            <div class="item">
                <p class="item__label">Acceptez-vous des postes/missions à temps partiel ? </p>
                <p class="item__text"><?php the_field('temps_partiel'); ?></p>
            </div>
        </div>
    </section>

    <!-- Présentation -->
    <section class="section-pad-bot">
        <div class="container">

            <h2 class="dossier-h2-title mb-10">Présentation</h2>

            <div class="grid sm:grid-cols-3 gap-x-10 print:grid-cols-2">
                <div class="item">
                    <p class="item__label">Civilité : </p>
                    <p class="item__text"><?php the_field('civilite'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Nom : </p>
                    <p class="item__text"><?php the_field('nom_dusage'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Prénom : </p>
                    <p class="item__text"><?php the_field('prenom'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Nom de naissance : </p>
                    <p class="item__text"><?php the_field('nom_de_famille'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Nationalité : </p>
                    <p class="item__text"><?php the_field('nationalite'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Date de naissance : </p>
                    <p class="item__text"><?php the_field('date_de_naissance'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Lieu de naissance : </p>
                    <p class="item__text"><?php the_field('lieu_de_naissance'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Adresse : </p>
                    <p class="item__text"><?php the_field('adresse'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Code postal : </p>
                    <p class="item__text"><?php the_field('code_postal'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Ville : </p>
                    <p class="item__text"><?php the_field('ville'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Téléphone : </p>
                    <p class="item__text"><?php the_field('telephone'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Email : </p>
                    <p class="item__text"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                </div>
                <div class="item">
                    <p class="item__label">Moyen de transport : </p>
                    <p class="item__text"><?php the_field('moyen_de_transport'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Temps de transport aller que vous acceptez d’effectuer par jour : </p>
                    <p class="item__text"><?php the_field('temps_de_transport'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Informations utiles : </p>
                    <p class="item__text"><?php the_field('informations_utiles'); ?></p>
                </div>
            </div>

            <!-- Contact en cas d'urgence -->
            <h3 class="dossier-h3-title mt-10 mb-3">Contact en cas d'urgence</h3>

            <div class="grid sm:grid-cols-3 gap-x-10 print:grid-cols-2">
                <div class="item">
                    <p class="item__label">Prénom / Nom : </p>
                    <p class="item__text"><?php the_field('contact_nom'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Lien : </p>
                    <p class="item__text"><?php the_field('contact_lien'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Téléphone : </p>
                    <p class="item__text"><?php the_field('contact_telephone'); ?></p>
                </div>
            </div>

        </div>
    </section>

    <!-- Expériences pro -->
    <section class="section-pad-bot">
        <div class="container">
            <h2 class="dossier-h2-title mb-10 pagebreak">Expérience professionnelle</h2>

            <h3 class="dossier-h3-title mb-3">Dernier emploi</h3>

            <div class="grid sm:grid-cols-3 gap-x-10 print:grid-cols-2">
                <div class="item">
                    <p class="item__label">Fonction : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_fonction'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Du : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_du'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Au : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_au'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Société : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_societe'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Effectif managé : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_effectif_manage'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Clientèle : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_clientele'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Produits et services : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_produits_et_services'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Nom référent : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_nom_referent'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Fonction référent : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_fonction_referent'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Email référent : </p>
                    <p class="item__text"><a href="mailto:<?php the_field('dernier_emploi_email_referent'); ?>"><?php the_field('dernier_emploi_email_referent'); ?></a></p>
                </div>
                <div class="item">
                    <p class="item__label">Téléphone référent : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_telephone_referent'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Motif de rupture : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_motif_de_rupture'); ?></p>
                </div>
                <?php if(get_field('dernier_emploi_precision_du_motif')): ?>
                <div class="item">
                    <p class="item__label">Précision du motif de rupture : </p>
                    <p class="item__text"><?php the_field('dernier_emploi_precision_du_motif'); ?></p>
                </div>
                <?php endif; ?>
            </div>

            <h3 class="dossier-h3-title mt-10 mb-3">Emploi le plus marquant</h3>

            <div class="grid sm:grid-cols-3 gap-x-10 print:grid-cols-2">
                <div class="item">
                    <p class="item__label">Fonction : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_fonction'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Du : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_du'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Au : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_au'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Société : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_societe'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Effectif managé : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_effectif_manage'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Clientèle : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_clientele'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Produits et services : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_produits_et_services'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Nom référent : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_nom_referent'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Fonction référent : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_fonction_referent'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Email référent : </p>
                    <p class="item__text"><a href="mailto:<?php the_field('emploi_marquant_email_referent'); ?>"><?php the_field('emploi_marquant_email_referent'); ?></a></p>
                </div>
                <div class="item">
                    <p class="item__label">Téléphone référent : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_telephone_referent'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Motif de rupture : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_motif_de_rupture'); ?></p>
                </div>
                <?php if(get_field('emploi_marquant_precision_du_motif')): ?>
                <div class="item">
                    <p class="item__label">Précision du motif de rupture : </p>
                    <p class="item__text"><?php the_field('emploi_marquant_precision_du_motif'); ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Questions annexes -->
    <section class="section-pad-bot">
        <div class="container">
            <h2 class="dossier-h2-title mb-10 pagebreak">Questions annexes</h2>  
            
            <div class="">
                <div class="item">
                    <p class="item__label">Rémunération souhaitée : </p>
                    <p class="item__text"><?php the_field('annexe_remuneration_souhaitee'); ?></p>
                </div>
                <div class="item">
                    <p class="item__label">Rémunération actuelle : </p>
                    <p class="item__text"><?php the_field('annexe_remuneration_actuelle'); ?></p>
                </div>
                <div class="item col-span-2">
                    <p class="item__label">Quelles sont les tâches qui vous intéressent le plus et pourquoi ? </p>
                    <p class="item__text block"><?php the_field('annexe_question_1'); ?></p>
                </div>
                <div class="item col-span-2">
                    <p class="item__label">Quelles sont les tâches qui vous intéressent le moins et pourquoi ? </p>
                    <p class="item__text block"><?php the_field('annexe_question_2'); ?></p>
                </div>
                <div class="item col-span-2">
                    <p class="item__label">Quelles sont les raisons de votre recherche d’emploi et vos projets professionnels pour les 5 prochaines années ? </p>
                    <p class="item__text block"><?php the_field('annexe_question_3'); ?></p>
                </div>
                <div class="item col-span-2">
                    <p class="item__label">Quelles sont selon vous, les principales qualités qui vous caractérisent ? </p>
                    <p class="item__text block"><?php the_field('annexe_question_4'); ?></p>
                </div>
                <div class="item col-span-2">
                    <p class="item__label">Quels sont les points que vous souhaitez faire évoluer ? </p>
                    <p class="item__text block"><?php the_field('annexe_question_5'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad-bot print:hidden">
        <div class="container text-center">
            <button class="btn-primary btn-white" onClick="window.print()">Imprimer / exporter</button>
        </div>
    </section>

</div>

<?php get_footer('blank'); ?>