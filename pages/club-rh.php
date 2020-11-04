<?php 
/*
Template Name: Club RH
*/
get_header("club-rh");
?>

<div class="page-pt">

<?php
if(post_password_required( )):
?>
    <!-- HEADER NON CONNECTE -->
    <section class="hero hero-full hero-club-rh">
        <div class="z-10 container xxl:max-w-none">
            <div class="md:w-3/5 lg:w-7/12 hero-full__content">
                <h1 class="hero-title h1-title">Le rendez-vous des managers</h1>
                <div class="form max-w-sm mt-10">
                    <?php echo get_the_password_form(); ?> 
                </div>
            </div> 
        </div>
        <div class="overlay"></div>
        <div class="reveal bg-dark"></div>
    </section>
<?php
else:
?>
    <!-- HEADER CONNECTE -->
    <section class="hero hero-full hero-club-rh">
        <div class="z-10 container xxl:max-w-none">
            <div class="md:w-3/5 lg:w-7/12 hero-full__content">
                <h1 class="hero-title h1-title lg:py-16 xl:py-24">Le rendez-vous des managers</h1>
            </div> 
        </div>
        <div class="overlay"></div>
        <div class="reveal bg-dark"></div>
    </section>
<?php
endif;
?>

    <!-- INTRO -->
    <section class="section-pad">
        <div class="container">
            <p class="text-center text-2xl leading-tight lg:w-2/3 lg:mx-auto lg:text-3xl">Le monde du travail est en perpétuelle évolution. S’informer, se former, benchmarker sont devenus votre quotidien, c’est pourquoi nous avons imaginé le Club RH.</p>
        </div>
    </section>

    <!-- CONTENU DU CLUB RH -->
    <section>
        <div class="container divide-y divide-white divide-opacity-50 lg:grid lg:grid-cols-3 lg:divide-x lg:divide-y-0">

            <div class="pb-10 lg:py-0">
                <div class="lg:w-4/5 xl:w-2/3 lg:mx-auto">
                    <h2 class="h3-title">Une veille juridique en droit social</h2>
                    <p class="text-sm leading-tight my-3 lg:my-6">Les dernières actualités juridiques mises à jour chaque semaine</p>
                    <div class="text-right">
                        <a href="<?php echo get_site_url(); ?>/entreprise/club-rh/veille-juridique" class="btn-secondary btn-white">Accéder</a>    
                    </div>    
                </div>
            </div>

            <div class="py-10 lg:py-0">
                <div class="lg:w-4/5 xl:w-2/3 lg:mx-auto">
                    <h2 class="h3-title">Des webinaires mensuels sur l’actualité managériale</h2>
                    <p class="text-sm leading-tight my-3 lg:my-6">Animés par des experts sur une thématique managériale</p>
                    <div class="text-right">
                        <a href="<?php echo get_site_url(); ?>/entreprise/club-rh/webinars" class="btn-secondary btn-white">Accéder</a>    
                    </div>    
                </div>
            </div>

            <div class="pt-10 lg:py-0">
                <div class="lg:w-4/5 xl:w-2/3 lg:mx-auto">
                    <h2 class="h3-title">Une revue des talents top & middle managers</h2>
                    <p class="text-sm leading-tight my-3 lg:my-6">Pour trouver votre collaborateur de demain</p>
                    <div class="text-right">
                        <a href="<?php echo get_site_url(); ?>/entreprise/club-rh/revue-des-talents" class="btn-secondary btn-white">Accéder</a>    
                    </div>    
                </div>
            </div>

        </div>
    </section>


    <!-- CONNEXION -->
    <?php if(post_password_required( )): ?>
    <section class="section-pad-top">
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
    <?php endif; ?>

    <!-- CITATION -->
    <section class="section-pad">
        <div class="container">
            <div class="bg-light text-dark text-center py-20 px-6 lg:w-10/12 lg:mx-auto">
                <p class="leading-tight text-2xl lg:text-3xl">Le meilleur moyen de prévoir le futur, c’est de le créer.</p>
                <p class="text-center font-bold text-xs mt-4">Peter Drucker</p>                
            </div>
        </div>
    </section>

    <!-- QUESTION DEMANDE -->
    <div class="bg-light text-dark">
        <?php echo get_template_part('./template-parts/question-demande-entreprise'); ?>
    </div>

</div>

<?php get_footer('entreprise'); ?>