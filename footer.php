<footer class="site-footer bg-dark text-light">
    <div class="container">
        <div class="site-footer__main section-pad lg:grid grid-cols-12">

            <!-- A propos -->
            <div class="hidden lg:block col-span-6">
                <h6 class="site-footer__section-title">À propos</h6>
                <p class="site-footer__a-propos text-2xl leading-tight">Depuis 2002 Exos est spécialisé dans le recrutement d’employés et de cadres pour les services : administratif, commerciaux, marketing, informatique, juridique, comptable,…</p>
                <a href="<?php echo get_site_url(); ?>/a-propos" class="btn-secondary btn-white mt-5">Découvrez-nous</a>
                <div class="flex mt-5">
                    <a href="https://www.facebook.com/exos.recrutement/" class="site-footer__icon-social mr-5" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37">
                            <g id="facebook" transform="translate(0 0.291)">
                                <path id="facebook-2" data-name="facebook" d="M12.481,2.557h1.406V.108A18.151,18.151,0,0,0,11.838,0C9.812,0,8.423,1.275,8.423,3.618V5.774H6.187V8.511H8.423V15.4h2.742V8.511h2.146l.341-2.737H11.165V3.889c0-.791.214-1.332,1.316-1.332Z" transform="translate(7.627 9.719)" fill="#f6f9fb"/>
                                <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(0 -0.291)" fill="none" stroke="#f6f9fb" stroke-width="2">
                                <ellipse cx="18" cy="18.5" rx="18" ry="18.5" stroke="none"/>
                                <ellipse cx="18" cy="18.5" rx="17" ry="17.5" fill="none"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/2740192/admin/" class="site-footer__icon-social" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="37" viewBox="0 0 38 37">
                            <g id="linkedin" transform="translate(0.326 0.291)">
                                <g id="linkedin-2" data-name="linkedin" transform="translate(11.302 8.791)">
                                <path id="Tracé_41" data-name="Tracé 41" d="M18.436,18.112h0V12.465c0-2.762-.595-4.891-3.824-4.891a3.353,3.353,0,0,0-3.02,1.66h-.045v-1.4H8.489V18.111h3.188v-5.09c0-1.34.254-2.636,1.914-2.636,1.635,0,1.66,1.529,1.66,2.722v5Z" transform="translate(-3.043 -2.715)" fill="#f6f9fb"/>
                                <path id="Tracé_42" data-name="Tracé 42" d="M.4,7.977H3.588V18.256H.4Z" transform="translate(-0.142 -2.859)" fill="#f6f9fb"/>
                                <path id="Tracé_43" data-name="Tracé 43" d="M1.849,0A1.858,1.858,0,1,0,3.7,1.849,1.849,1.849,0,0,0,1.849,0Z" fill="#f6f9fb"/>
                                </g>
                                <g id="Tracé_50" data-name="Tracé 50" transform="translate(-0.326 -0.291)" fill="none">
                                <path d="M19,0A18.755,18.755,0,0,1,38,18.5,18.755,18.755,0,0,1,19,37,18.755,18.755,0,0,1,0,18.5,18.755,18.755,0,0,1,19,0Z" stroke="none"/>
                                <path d="M 19 2 C 14.44908905029297 2 10.17326927185059 3.722949981689453 6.960199356079102 6.851470947265625 C 3.761569976806641 9.965930938720703 2 14.10279083251953 2 18.5 C 2 22.89720916748047 3.761569976806641 27.0340690612793 6.960199356079102 30.14852905273438 C 10.17326927185059 33.27705001831055 14.44908905029297 35 19 35 C 23.55091094970703 35 27.82672882080078 33.27705001831055 31.0398006439209 30.14852905273438 C 34.23843002319336 27.0340690612793 36 22.89720916748047 36 18.5 C 36 14.10279083251953 34.23843002319336 9.965930938720703 31.0398006439209 6.851470947265625 C 27.82672882080078 3.722949981689453 23.55091094970703 2 19 2 M 19 0 C 29.49341011047363 0 38 8.282730102539062 38 18.5 C 38 28.71726989746094 29.49341011047363 37 19 37 C 8.506589889526367 37 0 28.71726989746094 0 18.5 C 0 8.282730102539062 8.506589889526367 0 19 0 Z" stroke="none" fill="#f6f9fb"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <div>
                        <?php echo do_shortcode('[QUALIDGET type="badge"]'); ?>
                    </div>
                </div>
            </div>

            <!-- Menu -->
            <div class="site-footer__menu lg:col-span-2 lg:col-start-11 lg:row-start-1">
                <div class="uppercase font-medium text-xs sm:text-sm">
                    <?php 
                    wp_nav_menu(array( 
                        'theme_location' => 'menu-candidat',
                    )); 
                    ?>  
                </div>
                <div class="site-footer__menu__cta mt-5">
                    <a href="<?php echo get_site_url(); ?>/candidature-spontanee" class="leading-none block rounded-md text-light lg:inline-block">Candidature spontanée</a>
                </div>
                <div class="flex mt-8 lg:hidden">
                    <a href="https://www.facebook.com/exos.recrutement/" class="site-footer__icon-social mr-5" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37">
                            <g id="facebook" transform="translate(0 0.291)">
                                <path id="facebook-2" data-name="facebook" d="M12.481,2.557h1.406V.108A18.151,18.151,0,0,0,11.838,0C9.812,0,8.423,1.275,8.423,3.618V5.774H6.187V8.511H8.423V15.4h2.742V8.511h2.146l.341-2.737H11.165V3.889c0-.791.214-1.332,1.316-1.332Z" transform="translate(7.627 9.719)" fill="#f6f9fb"/>
                                <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(0 -0.291)" fill="none" stroke="#f6f9fb" stroke-width="2">
                                <ellipse cx="18" cy="18.5" rx="18" ry="18.5" stroke="none"/>
                                <ellipse cx="18" cy="18.5" rx="17" ry="17.5" fill="none"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/2740192/admin/" class="site-footer__icon-social" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="37" viewBox="0 0 38 37">
                            <g id="linkedin" transform="translate(0.326 0.291)">
                                <g id="linkedin-2" data-name="linkedin" transform="translate(11.302 8.791)">
                                <path id="Tracé_41" data-name="Tracé 41" d="M18.436,18.112h0V12.465c0-2.762-.595-4.891-3.824-4.891a3.353,3.353,0,0,0-3.02,1.66h-.045v-1.4H8.489V18.111h3.188v-5.09c0-1.34.254-2.636,1.914-2.636,1.635,0,1.66,1.529,1.66,2.722v5Z" transform="translate(-3.043 -2.715)" fill="#f6f9fb"/>
                                <path id="Tracé_42" data-name="Tracé 42" d="M.4,7.977H3.588V18.256H.4Z" transform="translate(-0.142 -2.859)" fill="#f6f9fb"/>
                                <path id="Tracé_43" data-name="Tracé 43" d="M1.849,0A1.858,1.858,0,1,0,3.7,1.849,1.849,1.849,0,0,0,1.849,0Z" fill="#f6f9fb"/>
                                </g>
                                <g id="Tracé_50" data-name="Tracé 50" transform="translate(-0.326 -0.291)" fill="none">
                                <path d="M19,0A18.755,18.755,0,0,1,38,18.5,18.755,18.755,0,0,1,19,37,18.755,18.755,0,0,1,0,18.5,18.755,18.755,0,0,1,19,0Z" stroke="none"/>
                                <path d="M 19 2 C 14.44908905029297 2 10.17326927185059 3.722949981689453 6.960199356079102 6.851470947265625 C 3.761569976806641 9.965930938720703 2 14.10279083251953 2 18.5 C 2 22.89720916748047 3.761569976806641 27.0340690612793 6.960199356079102 30.14852905273438 C 10.17326927185059 33.27705001831055 14.44908905029297 35 19 35 C 23.55091094970703 35 27.82672882080078 33.27705001831055 31.0398006439209 30.14852905273438 C 34.23843002319336 27.0340690612793 36 22.89720916748047 36 18.5 C 36 14.10279083251953 34.23843002319336 9.965930938720703 31.0398006439209 6.851470947265625 C 27.82672882080078 3.722949981689453 23.55091094970703 2 19 2 M 19 0 C 29.49341011047363 0 38 8.282730102539062 38 18.5 C 38 28.71726989746094 29.49341011047363 37 19 37 C 8.506589889526367 37 0 28.71726989746094 0 18.5 C 0 8.282730102539062 8.506589889526367 0 19 0 Z" stroke="none" fill="#f6f9fb"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Coordonnees -->
            <div class="site-footer__nous-trouver mt-20 lg:mt-0 lg:col-span-2 lg:col-start-8 lg:row-start-1">
                <h6 class="site-footer__section-title">Nous trouver</h6>
                <div class="grid grid-cols-2 text-sm sm:text-base lg:block">
                    <p>164 rue de Vaugirard <br>75015 PARIS</p>
                    <p class="text-right lg:text-left lg:mt-5">t. 01 40 19 72 75<br>f. 01 40 19 72 82</p>
                </div>
                <a href="https://www.google.fr/maps/place/EXOS+Recrutement+%26+int%C3%A9rim/@48.8432668,2.3108566,17z/data=!3m1!4b1!4m5!3m4!1s0x47e67204dcead01f:0xcf85489a149e73e6!8m2!3d48.8432668!4d2.3130453" target="_blank" class="btn-secondary btn-white mt-5">Voir le plan</a>
            </div>
            
        </div>

        <div class="site-footer__mentions py-10 text-gray text-xs font-bold text-center md:py-16 lg:flex lg:items-center lg:justify-between">
            <div class="mb-10 lg:mb-0 lg:order-2 lg:flex-1">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-exos-white.svg" alt="Logo exos blanc" class="w-32 mx-auto lg:w-40">    
            </div>
            <div class=" mb-2 lg:mb-0 lg:order-1 lg:flex-1 lg:text-left">
                <p>© exos 2020</p>
            </div>
            <div class="lg:order-3 lg:flex-1 lg:text-right">
                <p><a href="<?php echo get_site_url(); ?>/mentions" class="text-light mb-2 lg:mb-0 lg:mr-6 block lg:inline">Mentions légales</a> Réalisation : <a href="https://bemy.studio" class="text-light" target="_blank">bemy studio</a></p>
            </div>
        </div>  

    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>