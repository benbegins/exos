<?php 
/*
Template Name: Entreprise Services
*/
get_header("entreprise");
?>

<div class="page-pt">
    
    <section class="section-pad">
        <div class="container">
            <h1 class="h1-title relative">
                Nos services
            </h1>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section-pad-bot">
        <div class="container">
            <ul class="lg:grid lg:grid-cols-2 lg:gap-10 lg:w-10/12 lg:ml-auto">
                <!-- recrutement -->
                <li class="mb-20 md:grid md:grid-cols-3">
                    <div>
                        <img class="md:ml-auto md:mr-10" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-services-recrutement.svg" alt="icon recrutement">
                    </div>
                    <div class="mt-4 md:col-span-2 md:mt-0">
                        <h2 class="h3-title">Recrutement</h2>
                        <p class="mt-4">De l’accompagnement à la définition du profil recherché jusqu’au suivi de l’intégration, nous prenons en charge toutes les étapes du recrutement pour vous aider à trouver le collaborateur qui vous correspond.</p>
                    </div>
                </li>
                <!-- interim_gestion -->
                <li class="mb-20 md:grid md:grid-cols-3">
                    <div>
                        <img class="md:ml-auto md:mr-10" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-services-interim_gestion.svg" alt="icon interim_gestion">
                    </div>
                    <div class="mt-4 md:col-span-2 md:mt-0">
                        <h2 class="h3-title">Intérim en gestion</h2>
                        <p class="mt-4">Vous avez déjà un candidat ? Nous nous occupons des formalités administratives pour que vous restiez concentré sur votre activité.</p>
                    </div>
                </li>
                <!-- interim_delegation -->
                <li class="mb-20 md:grid md:grid-cols-3">
                    <div>
                        <img class="md:ml-auto md:mr-10" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-services-interim_delegation.svg" alt="icon interim_delegation">
                    </div>
                    <div class="mt-4 md:col-span-2 md:mt-0">
                        <h2 class="h3-title">Intérim en délégation</h2>
                        <p class="mt-4">Nous trouvons pour vous le meilleur candidat et prenons en charge toutes les formalités administratives.</p>
                    </div>
                </li>
                <!-- aide_recrutement -->
                <li class=" md:grid md:grid-cols-3">
                    <div>
                        <img class="md:ml-auto md:mr-10" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-services-aide_recrut.svg" alt="icon aide au recrutement">
                    </div>
                    <div class="mt-4 md:col-span-2 md:mt-0">
                        <h2 class="h3-title">Aide au recrutement</h2>
                        <p class="mt-4">Nous proposons un ensemble de prestations à la carte pour vous assister et vous faire gagner du temps lorsque vous gérez vous-même le recrutement d’un collaborateur.</p>
                    </div>
                </li>
            </ul>
            <div class="text-right">
                <a href="<?php echo get_site_url(); ?>/entreprise/contact" class="btn-primary btn-white mt-20 lg:mt-16">Nous confier une mission</a>
            </div>
        </div>
    </section>

    <!-- SECTEURS -->
    <section class="secteur md:grid md:grid-cols-2">
        <div class="secteur__img tertiaire">
            <div class="absolute inset-x-0 bottom-0 px-6 xl:p-16 py-10 z-10">
                <p class="h3-title">Nous sommes spécialisés dans les métiers suivants :</p>
                <h2 class="h1-title">Secteur tertiaire</h2>    
            </div>
            <div class="absolute inset-0 opacity-50 bg-dark"></div>
        </div>
        <div class="secteur__img industrie">
            <div class="absolute inset-x-0 bottom-0 px-6 xl:p-16 py-10 z-10">
                <h2 class="h1-title">Industrie ingénierie</h2>
            </div>
            <div class="absolute inset-0 opacity-50 bg-dark"></div>
        </div>
    </section>

    <!-- ETAPES RECRUTEMENT -->
    <section class="section-pad">
        <div class="container">
            <h2 class="h2-title">Les étapes du recrutement</h2>
            <ul class="md:grid md:grid-cols-2 md:gap-6 lg:grid-cols-4 lg:gap-10 lg:mt-10">

                <li class="mt-10 lg:mt-6">
                    <p class="h1-title">01</p>
                    <h3 class="h3-title my-3 lg:my-5">Définition du profil</h3>
                    <p>Nous vous aidons à définir au mieux les compétences du profil recherché.</p>
                </li>

                <li class="mt-10 lg:mt-6">
                    <p class="h1-title">02</p>
                    <h3 class="h3-title my-3 lg:my-5">Analyse des candidatures</h3>
                    <p>Nous analysons les CVs et sélectionnons les plus pertinents.</p>
                </li>

                <li class="mt-10 lg:mt-6">
                    <p class="h1-title">03</p>
                    <h3 class="h3-title my-3 lg:my-5">Entretien</h3>
                    <p>Après une pré-sélection téléphonique, nous recevons les potentiels candidats en entretiens individuels.</p>
                </li>

                <li class="mt-10 lg:mt-6">
                    <p class="h1-title">04</p>
                    <h3 class="h3-title my-3 lg:my-5">Évaluation</h3>
                    <p>En fonction du profil recherché, nous faisons passer des tests d’évaluation techniques ou de personnalité aux candidats retenus.</p>
                </li>

                <li class="mt-10 lg:mt-6">
                    <p class="h1-title">05</p>
                    <h3 class="h3-title my-3 lg:my-5">Contrôle de références et tests complémentaires</h3>
                    <p>Pour s’assurer au mieux des compétences du candidats, nous complétons le processus par un contrôle des références et d’éventuels tests complémentaires (techniques, linguistiques,…)</p>
                </li>

                <li class="mt-10 lg:mt-6">
                    <p class="h1-title">06</p>
                    <h3 class="h3-title my-3 lg:my-5">Présentation des candidats</h3>
                    <p>À l’issus du processus de sélection, nous vous présentons les profils qui correspondent le mieux à votre entreprise et au poste proposé.</p>
                </li>

                <li class="mt-10 lg:mt-6">
                    <p class="h1-title">07</p>
                    <h3 class="h3-title my-3 lg:my-5">Suivi de l'intégration</h3>
                    <p>Nous gardons contact avec vous durant les premières semaines pour nous assurer que l’intégration de votre nouveau collaborateur se déroule au mieux.</p>
                </li>
                

            </ul>
        </div>
    </section>

    <!-- TROP TOT POUR L'INTERIM -->
    <section class="section-split">
        <div class="section-split__image image__pensez-interim"></div>
        <div class="section-split__text py-10">
            <div class="container">
                <h2 class="h2-title">Trop tôt pour un CDD/CDI&nbsp;? Pensez à l’intérim&nbsp;!</h2>
                <p class="hidden lg:block mt-8 lg:mt-10">Que ce soit pour des raisons de stabilité financière ou pour tester l’utilité d’un poste, l’intérim peut être la solution idéale pour embaucher un nouveau collaborateur en évitant des formalités administratives complexes. Contactez-nous pour en parler !</p>
                <a href="<?php echo get_site_url(); ?>/entreprise/contact" class="btn-primary btn-white mt-6 sm:mt-8 lg:mt-10">Nous contacter</a>   
            </div>
        </div>
    </section>

    <!-- ARMADO -->
    <section class="section-pad">
        <div class="container">
            <div class="bg-blue text-light rounded-md px-6 py-12 md:p-12 lg:flex lg:items-center lg:p-0 xl:w-10/12 xl:mx-auto">
                <div class="lg:w-4/12 lg:relative lg:ml-24">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-armado-white.png" alt="Logo Armado">
                    <h2 class=" h3-title mt-10">Notre plateforme 100% dématérialisée pour simplifier les échanges.</h2>
                    <p class="mt-4">Signature électronique des contrats, stockage des documents en ligne ; grâce à la plateforme Armado, nous simplifions et accélérons les échanges avec nos clients et nos intérimaires pour plus d’efficacité et de réactivité.</p>
                </div>
                <div class="hidden lg:block lg:w-7/12 lg:ml-auto lg:text-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/visuel-armado.png" alt="Visuel Armado laptop" class="w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- NOUVEAU COLLABORATEUR -->
    <section class="section-split">
        <div class="section-split__image image__collaborateur"></div>
        <div class="section-split__text py-10">
            <div class="container">
                <h2 class="h2-title">Vous recherchez un nouveau collaborateur&nbsp;?</h2>
                <p class="hidden lg:block mt-8 lg:mt-10">N’hésitez pas à nous contacter pour en discuter : nous saurons vous accompagner pour trouver LE profil que vous recherchez !</p>
                <a href="<?php echo get_site_url(); ?>/entreprise/contact" class="btn-primary btn-white mt-6 sm:mt-8 lg:mt-10">Nous confier une mission</a>   
            </div>
        </div>
    </section>

    <?php echo get_template_part('./template-parts/question-demande-entreprise'); ?>

</div>

<?php get_footer('entreprise'); ?>