<?php 
/*
Template Name: Candidat Contact
*/
get_header();
?>

<div class="page-pt">
    <section class="section-pad">
        <div class="container">
            <h1 class="h1-title lg:w-3/4">Une question ou un besoin&nbsp;? Parlons-en&nbsp;!</h1>
        </div>
    </section>

    <section class="section-pad-bot">
        <div class="container lg:flex">
            <div class="form mb-20 lg:mb-0 lg:w-1/2">
                <?php echo do_shortcode('[forminator_form id="1279065"]'); ?>
            </div>
            <div class="lg:w-5/12 lg:ml-auto">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/back/locaux-03.jpg" alt="Locaux Exos" class="w-full">
                </div>
                <p class="mt-10">Nous avons hâte de discuter de votre projet professionnel et de trouver la mission qui vous convient. N’hésitez pas à nous écrire ou nous appeler pour en parler.</p>
                <div class="md:flex">
                    <div class="mt-10 md:w-2/5">
                        <p class="uppercase text-gray text-xs mb-2">Adresse</p>
                        <p>164 rue de Vaugirard <br>75015 PARIS</p>
                        <a href="https://goo.gl/maps/vTF9nJBD1Qoz6Bi36" class="btn-secondary btn-dark" target="_blank">Voir le plan</a>
                    </div>
                    <div class="mt-10 md:w-2/5 md:ml-auto">
                        <p class="uppercase text-gray text-xs mb-2">Téléphone & Fax</p>
                        <p>t. 01 40 19 72 75</p>
                        <p>f. 01 40 19 72 82</p>
                        <div class="mt-4">
                            <a href="#" class="icon-social icon-facebook-dark">Facebook</a>
                            <a href="#" class="icon-social icon-linkedin-dark ml-4">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>