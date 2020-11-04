<?php 
/*
Template Name: Rédiger un avis
*/
get_header();
?>

<div class="page-pt">

    <section class="section-pad">
        <div class="container">
            <a href="<?php echo get_site_url(); ?>/temoignages/" class="btn-secondary btn-back text-blue mb-10">Retour aux avis</a>
            <h1 class="h1-title lg:w-3/4">Merci de nous donner votre avis&nbsp;!</h1>
        </div>
    </section>

    <section>
        <div class="container lg:flex">
            <div class="lg:w-5/12 lg:order-last lg:ml-auto">
                <p>Nous vous remercions de nous laisser votre avis sur la collaboration avec notre agence. Nous le publierons sur notre site (en ne mettant que votre prénom et l’initiale de votre nom). <br>Par avance merci et à bientôt !</p>
                <p class="uppercase text-gray text-xs font-medium mt-5 lg:mt-10">Votre équipe Exos</p>
            </div>
            <div class="form mt-20 lg:mt-0 lg:w-1/2">
                <?php echo do_shortcode('[forminator_form id="1279077"]'); ?>
            </div>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande'); ?>

</div>

<?php get_footer(); ?>