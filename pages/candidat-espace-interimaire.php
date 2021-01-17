<?php 
/*
Template Name: Candidat Espace Interimaire
*/
get_header();

$guide_armado = get_field('guide_armado');
$conseils_cv = get_field('conseils_cv');
$conseils_entretien = get_field('conseils_entretien');
$releve_heures = get_field('releve_heures');
$mission = get_field('mission');
$passeport = get_field('passeport');
$avantages_interimaires = get_field('avantages_interimaires');
$notice_prevoyance = get_field('notice_prevoyance');
$notice_complementaire_sante = get_field('notice_complementaire_sante');
?>

<div class="page-pt">

    <section class="hero-split">
            <div class="overflow-hidden">
                <div class="hero-split__img hero-interimaire img-parallax"></div>
            </div>
            
            <div class="hero-split__text">
                <div class="container">
                    <h1 class="hero-title opacity-0">Espace intérimaires</h1>
                    <p class="mt-6 hero-text opacity-0">Toutes les infos, liens et documents nécessaires au bon déroulement de votre mission avec Exos.</p>
                </div>
            </div>
    </section>

    <!-- DOCS & LIENS UTILES -->
    <section class="section-pad">
        <div class="container lg:flex">
            <!-- DOCUMENTS UTILES -->
            <div class="doc-utiles lg:w-7/12">
                <h2 class="h2-title">Documents utiles</h2>


                <!-- CV ET ENTRETIEN -->
                <h3 class="h3-title mt-16 lg:mt-20">CV & Entretien</h3>
                <p class="mt-2 lg:w-1/2">Mettez toutes les chances de votre côté avec nos conseils pour réussir votre entretien et votre CV.</p>
                <div class="mt-8 lg:mt-10 grid grid-cols-2 gap-4 lg:gap-8">
                    <!-- CONSEIL CV -->
                    <?php if($conseils_cv): ?>
                    <a href="<?php echo $conseils_cv['url']; ?>" class="doc-download no-transition" target="_blank">
                        <div class="doc-download__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34.739" height="48.707" viewBox="0 0 34.739 48.707">
                                <path id="Tracé_154" data-name="Tracé 154" d="M3086.852,684.309H3059.64a3.763,3.763,0,0,0-3.764,3.763v41.18a3.763,3.763,0,0,0,3.764,3.763h27.212a3.762,3.762,0,0,0,3.763-3.763v-41.18A3.762,3.762,0,0,0,3086.852,684.309Zm-18.161,8.062q0-.126.153-.126h2.128a.165.165,0,0,1,.179.153l1.19,5.9c.009.029.022.042.042.042s.031-.013.04-.042l1.162-5.9c.009-.1.069-.153.181-.153h2.073c.128,0,.179.062.15.179l-2.405,9.361a.179.179,0,0,1-.193.137h-2.128a.179.179,0,0,1-.195-.137l-2.379-9.361Zm-7.175,2.887a3.22,3.22,0,0,1,.407-1.644,2.774,2.774,0,0,1,1.162-1.093,3.757,3.757,0,0,1,1.735-.387,3.85,3.85,0,0,1,1.737.374,2.692,2.692,0,0,1,1.159,1.064,3.1,3.1,0,0,1,.409,1.6v.055a.186.186,0,0,1-.049.124.149.149,0,0,1-.117.055L3066,695.5c-.113,0-.166-.051-.166-.153v-.192a1.051,1.051,0,0,0-.279-.761,1.07,1.07,0,0,0-1.465,0,1.058,1.058,0,0,0-.277.761v3.87a1.061,1.061,0,0,0,.277.761,1.07,1.07,0,0,0,1.465,0,1.055,1.055,0,0,0,.279-.761v-.193c0-.1.053-.153.166-.153l1.963.082a.156.156,0,0,1,.117.055.2.2,0,0,1,.049.126v.027a3.132,3.132,0,0,1-.409,1.611,2.74,2.74,0,0,1-1.159,1.08,3.822,3.822,0,0,1-1.737.378,3.731,3.731,0,0,1-1.735-.387,2.737,2.737,0,0,1-1.162-1.106,3.294,3.294,0,0,1-.407-1.657Zm15.242,29.546h-15.284v-3.25h15.284Zm8.26-7.211h-23.544v-3.25h23.544Zm0-7.211h-23.544v-3.25h23.544Z" transform="translate(-3055.876 -684.309)" fill="#047eda"/>
                            </svg>
                        </div>
                        <p class="doc-download__text">Conseil CV</p>
                        <div class="cursor-over absolute inset-0"></div>
                    </a>
                    <?php endif; ?>
                    <!-- CONSEIL ENTRETIEN -->
                    <?php if($conseils_entretien): ?>
                    <a href="<?php echo $conseils_entretien['url']; ?>" class="doc-download no-transition" target="_blank">
                        <div class="doc-download__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="66.001" height="54.837" viewBox="0 0 66.001 54.837">
                                <g id="Groupe_262" data-name="Groupe 262" transform="translate(0)">
                                    <path id="Tracé_152" data-name="Tracé 152" d="M2338.638,734.778v16.647a5.792,5.792,0,0,1-5.786,5.786H2318.04a18.564,18.564,0,0,0,18.117,14.514c.392,0,.782-.015,1.169-.039l6.876,6.876v-8.668a18.56,18.56,0,0,0-5.564-35.117Z" transform="translate(-2288.713 -723.726)" fill="#047eda"/>
                                    <path id="Tracé_153" data-name="Tracé 153" d="M2231.563,712.008v-24.4a3.3,3.3,0,0,0-3.3-3.3h-40.837a3.3,3.3,0,0,0-3.3,3.3v24.4a3.3,3.3,0,0,0,3.3,3.3h5.547V724.1l8.783-8.786h26.506A3.3,3.3,0,0,0,2231.563,712.008Z" transform="translate(-2184.12 -684.308)" fill="#047eda"/>
                                </g>
                            </svg>
                        </div>
                        <p class="doc-download__text">Conseil Entretien</p>
                        <div class="cursor-over absolute inset-0"></div>
                    </a>
                    <?php endif; ?>
                </div>
                

                <!-- RELEVE DHEURES -->
                <h3 class="h3-title mt-20 lg:mt-24">Relevé d'heures (pour intérimaires)</h3>
                <p class="mt-2 lg:w-1/2">Téléchargez ici votre relevé d’heures hebdomadaire.</p>
                <div class="mt-8 lg:mt-10 grid grid-cols-2 gap-4 lg:gap-8">
                    <!-- RELEVE HEURES -->
                    <?php if($releve_heures): ?>
                    <a href="<?php echo $releve_heures['url']; ?>" class="doc-download no-transition" target="_blank">
                        <div class="doc-download__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="49.001" height="49.001" viewBox="0 0 49.001 49.001">
                                <path id="Tracé_155" data-name="Tracé 155" d="M2946.96,696.05a24.5,24.5,0,1,0,24.5,24.5A24.5,24.5,0,0,0,2946.96,696.05Zm1.527,25.645v9.322h-3.27V720.341l.062-.062,12.04-12.04,2.313,2.313Z" transform="translate(-2922.46 -696.05)" fill="#047eda"/>
                            </svg>
                        </div>
                        <p class="doc-download__text">Relevé d'heures</p>
                        <div class="cursor-over absolute inset-0"></div>
                    </a>
                    <?php endif; ?>
                </div>    


                <!-- VOTRE MISSION MODE DEMPLOI -->
                <h3 class="h3-title mt-20 lg:mt-24">Votre mission, mode d'emploi</h3>
                <p class="mt-2 lg:w-1/2">Tout savoir sur votre mission en intérim.</p>
                <div class="mt-8 lg:mt-10 grid grid-cols-2 gap-4 lg:gap-8">
                    <!-- VOTRE MISSION CHEZ EXOS -->
                    <?php if($mission): ?>
                    <a href="<?php echo $mission['url']; ?>" class="doc-download no-transition" target="_blank">
                        <div class="doc-download__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="57.108" height="49.643" viewBox="0 0 57.108 49.643">
                                <g id="Groupe_274" data-name="Groupe 274" transform="translate(0)">
                                    <path id="Tracé_156" data-name="Tracé 156" d="M3594.355,1185.943v1.742a1.287,1.287,0,0,1-1.282,1.282h-6.757a1.287,1.287,0,0,1-1.282-1.282v-1.742a1.042,1.042,0,0,1,.022-.224l-24.047-8.39v21.1a3.221,3.221,0,0,0,3.221,3.221H3614.9a3.221,3.221,0,0,0,3.221-3.221v-21.1l-23.8,8.306A1.14,1.14,0,0,1,3594.355,1185.943Z" transform="translate(-3561.01 -1152.012)" fill="#047eda"/>
                                    <path id="Tracé_157" data-name="Tracé 157" d="M3614.9,1075.764h-11.38v-5.356a5.011,5.011,0,0,0-5.006-5.008H3581.7a5.013,5.013,0,0,0-5.006,5.008v5.356h-12.468a3.221,3.221,0,0,0-3.221,3.223v9.052h.111l28.444,9.925,28.442-9.925h.111v-9.052A3.221,3.221,0,0,0,3614.9,1075.764Zm-15.225,0h-19.127v-5.356a1.161,1.161,0,0,1,1.16-1.16h16.806a1.161,1.161,0,0,1,1.16,1.16Z" transform="translate(-3561.01 -1065.4)" fill="#047eda"/>
                                </g>
                            </svg>
                        </div>
                        <p class="doc-download__text">Votre mission chez Exos</p>
                        <div class="cursor-over absolute inset-0"></div>
                    </a>
                    <?php endif; ?>
                    <!-- PASSEPORT -->
                    <?php if($passeport): ?>
                    <a href="<?php echo $passeport['url']; ?>" class="doc-download no-transition" target="_blank">
                        <div class="doc-download__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="62.081" height="45.056" viewBox="0 0 62.081 45.056">
                                <g id="Groupe_275" data-name="Groupe 275" transform="translate(0)">
                                    <path id="Tracé_163" data-name="Tracé 163" d="M1913.242,983.232a6.212,6.212,0,0,1,5.822-4.1h42.952v-3.5a3.266,3.266,0,0,0-3.264-3.267h-27.783v-3.443a1.807,1.807,0,0,0-1.806-1.809H1915.05a1.808,1.808,0,0,0-1.808,1.809v3.443h-2.586a3.266,3.266,0,0,0-3.266,3.267v28.2l5.721-20.2C1913.15,983.5,1913.194,983.365,1913.242,983.232Z" transform="translate(-1907.39 -967.12)" fill="#047eda"/>
                                    <path id="Tracé_164" data-name="Tracé 164" d="M1969.769,1029.45h-46.491a3.916,3.916,0,0,0-3.766,2.847l-2.056,7.259-4.449,15.711a3.891,3.891,0,0,0,3.746,4.951h46.536a3.89,3.89,0,0,0,3.743-2.831l6.5-22.959A3.914,3.914,0,0,0,1969.769,1029.45Z" transform="translate(-1911.604 -1015.162)" fill="#047eda"/>
                                </g>
                            </svg>
                        </div>
                        <p class="doc-download__text">Passeport pour l'intérim</p>
                        <div class="cursor-over absolute inset-0"></div>
                    </a>
                    <?php endif; ?>
                </div>    


                <!-- AVANTAGES INTERIMAIRES -->
                <h3 class="h3-title mt-20 lg:mt-24">Vos avantages intérimaires</h3>
                <p class="mt-2 lg:w-1/2">Formation, actions sociales, mutuelle santé,  découvrez tous vos avantages.</p>
                <div class="mt-8 lg:mt-10 grid grid-cols-2 gap-4 lg:gap-8">
                    <!-- AVANTAGES -->
                    <?php if($avantages_interimaires): ?>
                    <a href="<?php echo $avantages_interimaires['url']; ?>" class="doc-download no-transition" target="_blank">
                        <div class="doc-download__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48.443" height="51.01" viewBox="0 0 48.443 51.01">
                                <path id="Tracé_159" data-name="Tracé 159" d="M6154.238,538.2a6.09,6.09,0,0,0-2.758-5.085,6.028,6.028,0,0,0,.52-2.451,6.1,6.1,0,0,0-6.081-6.081h-11.667l.193-8.272c.44-3.354-1.948-7.483-5.3-7.921s-4.407,1.948-4.846,5.3l-.492,3.765a14.017,14.017,0,0,1-2.635,6.521,13.741,13.741,0,0,1-3.572,3.371,17.385,17.385,0,0,0-4.735,4.491h-7.069v22.529h8.692v-.339a17.4,17.4,0,0,0,10.116,5.157,5.752,5.752,0,0,0,1.358.163h14.169a5.808,5.808,0,0,0,5.791-5.791v-.581a5.752,5.752,0,0,0-.118-1.16h.118a6.1,6.1,0,0,0,6.082-6.081,6.028,6.028,0,0,0-.52-2.451A6.088,6.088,0,0,0,6154.238,538.2Z" transform="translate(-6105.795 -508.337)" fill="#047eda"/>
                            </svg>
                        </div>
                        <p class="doc-download__text">Avantages</p>
                        <div class="cursor-over absolute inset-0"></div>
                    </a>
                    <?php endif; ?>
                    <!-- NOTICE PREVOYANCE -->
                    <?php if($notice_prevoyance): ?>
                    <a href="<?php echo $notice_prevoyance['url']; ?>" class="doc-download no-transition" target="_blank">
                        <div class="doc-download__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="41.475" height="51.084" viewBox="0 0 41.475 51.084">
                                <path id="Tracé_161" data-name="Tracé 161" d="M4112.262,430.118l-16.692-8.624a4.037,4.037,0,0,0-3.7,0l-16.693,8.624a4.056,4.056,0,0,0-2.182,3.909l1.342,17.717c1.133,9.256,12.877,17.108,17.516,19.868a3.637,3.637,0,0,0,3.737,0c4.639-2.76,16.383-10.612,17.516-19.868l1.341-17.717A4.057,4.057,0,0,0,4112.262,430.118Zm-21.487,24.15-2.452-2.449-4.089-4.089,2.452-2.451,4.089,4.089,9.978-9.978,2.449,2.451Z" transform="translate(-4072.981 -421.045)" fill="#047eda"/>
                            </svg>
                        </div>
                        <p class="doc-download__text">Notice prévoyance</p>
                        <div class="cursor-over absolute inset-0"></div>
                    </a>
                    <?php endif; ?>
                    <!-- COMPLEMENTAIRE SANTE -->
                    <?php if($notice_complementaire_sante): ?>
                    <a href="<?php echo $notice_complementaire_sante['url']; ?>" class="doc-download no-transition" target="_blank">
                        <div class="doc-download__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56.554" height="51.704" viewBox="0 0 56.554 51.704">
                                <path id="Tracé_162" data-name="Tracé 162" d="M5726.921,427.468a16.567,16.567,0,0,0-23.425,0,16.566,16.566,0,1,0-23.428,23.428l23.428,23.425,23.425-23.425A16.57,16.57,0,0,0,5726.921,427.468Zm-15.961,22.206h-5.5v5.5h-3.927v-5.5h-5.5v-3.927h5.5v-5.5h3.927v5.5h5.5Z" transform="translate(-5675.217 -422.617)" fill="#047eda"/>
                            </svg>
                        </div>
                        <p class="doc-download__text">Complémentaire santé</p>
                        <div class="cursor-over absolute inset-0"></div>
                    </a>
                    <?php endif; ?>
                </div>  


            </div>
            <!-- LIENS UTILES -->
            <div class="liens-utiles mt-20 lg:mt-0 lg:w-4/12 lg:ml-auto">
                <h2 class="h2-title">Liens utiles</h2>

                <ul class="divide-y divide-dark divide-opacity-15 border-b border-dark border-opacity-15 lg:mt-20">
                    <li class="pt-10 pb-3 lg:pt-0">
                        <p>Fonds d’Action Sociale du Travail Temporaire</p>
                        <a class="btn-secondary btn-blue mt-1 no-transition" href="https://www.fastt.org/" target="_blank">fastt.org</a>
                    </li>
                    <li class="pt-10 pb-3">
                        <p>Fonds de formation des intérimaires</p>
                        <a class="btn-secondary btn-blue mt-1 no-transition" href="https://www.faftt.fr/site/j_6/fr/accueil" target="_blank">AKTO</a>
                    </li>
                    <li class="pt-10 pb-3">
                        <p>Pôle emploi</p>
                        <a class="btn-secondary btn-blue mt-1 no-transition" href="https://www.pole-emploi.fr" target="_blank">pole-emploi.fr</a>
                    </li>
                    <li class="pt-10 pb-3">
                        <p>Outil en ligne de création de CV</p>
                        <a class="btn-secondary btn-blue mt-1 no-transition" href="https://moncv.com/" target="_blank">moncv.com</a>
                    </li>
                    <li class="pt-10 pb-3">
                        <p>La complémentaire santé des intérimaires</p>
                        <a class="btn-secondary btn-blue mt-1 no-transition" href="https://www.interimairessante.fr/" target="_blank">interimairessante.fr</a>
                    </li>
                    <li class="pt-10 pb-3">
                        <p>La prévoyance des intérimaires</p>
                        <a class="btn-secondary btn-blue mt-1 no-transition" href="https://www.interimairesprevoyance.fr/" target="_blank">interimairesprevoyance.fr</a>
                    </li>
                </ul>
            </div>     
        </div>
    </section>

    <!-- ARMADO -->
    <section class="section-pad-bot">
        <div class="container">
            <div class="bg-blue text-light rounded-md px-6 py-12 md:p-12 lg:flex lg:items-center lg:p-0 xl:w-10/12 xl:mx-auto">
                <div class="lg:w-4/12 lg:relative lg:ml-24">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-armado-white.png" alt="Logo Armado">
                    <p class="py-10">Simplifiez-vous la vie en retrouvant tous vos contrats d’intérim et vos bulletins de salaire en ligne.</p>
                    <a href="<?php echo $guide_armado['url']; ?>" target="_blank" class="btn-secondary btn-white no-transition">Voir le guide</a><br>
                    <a href="https://myarmado.fr/" class="btn-primary btn-white-2 mt-4 no-transition" target="_blank">Accès à Armado</a>
                </div>
                <div class="hidden lg:block lg:w-7/12 lg:ml-auto lg:text-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/visuel-armado.png" alt="Visuel Armado laptop" class="w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- PARRAINAGE -->
    <section class="section-split">
        <div class="section-split__img-container">
            <div class="section-split__image img-parallax image__parrainage"></div>
        </div>
        
        <div class="section-split__text py-10">
            <div class="container">
                <h2 class="h2-title">Parrainez un candidat ou une entreprise.</h2>
                <p class="hidden lg:block mt-8 lg:mt-10">EXOS vous récompense pour chaque candidat proposé qui décrochera un poste et pour chaque entreprise qui nous commandera une mission en venant de votre part. Demandez la liste des cadeaux et des primes à votre consultant EXOS.</p>
                <a href="<?php echo get_site_url(); ?>/contact" class="btn-primary btn-white mt-6 sm:mt-8 lg:mt-10">Recommander quelqu'un</a>    
            </div>
        </div>
    </section>

    <!-- NOS DERNIERES OFFRES -->
    <section class="section-pad-top">
        <div class="container">
            <h2 class="h2-title lg:w-1/2">Postulez dès maintenant à nos dernières offres</h2>
            
            <div class="liste-offres lg:mt-16">
                <?php
                // Requête : 3 derniers posts
                $args = array(
                    'post_type'             => 'post',
                    'posts_per_page'        => '3',
                    'ignore_sticky_posts'   => true,
                );
                $query = new WP_Query( $args );
                // Affichage des dernieres offres
                if ( $query->have_posts() ) :	
                    while ( $query->have_posts() ) : $query->the_post();
                        get_template_part( 'template-parts/offre-fullwidth' );
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

    <?php echo get_template_part('./template-parts/question-demande'); ?>


</div>

<?php get_footer(); ?>