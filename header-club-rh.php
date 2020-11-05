<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site bg-dark text-light club-rh">

    <div class="cursor cursor-orange"></div>
    <div class="page-transition bg-dark"></div>

    <header class="site-header header-club-rh fixed w-full z-30 flex items-center justify-between px-5 bg-dark text-light lg:px-10">
        <div class="site-header__logo logo-club-rh flex-grow z-30 lg:flex-none lg:mr-10">
            <a href="<?php echo get_site_url(); ?>/entreprise/club-rh"></a>
        </div>
        <div class="site-header__nav bg-dark fixed inset-0 text-light text-center text-sm z-20 flex flex-col justify-center lg:static lg:block lg:text-gray lg:bg-transparent lg:flex-grow lg:text-xs">
            <div class="site-header__nav__main uppercase font-medium">
                <?php 
                wp_nav_menu(array( 
                    'theme_location' => 'menu-club-rh',
                )); 
                ?>     
            </div>
            <div class="site-header__nav__social lg:hidden">
                <a href="https://www.facebook.com/exos.recrutement/" class="icon-social icon-facebook" target="_blank">Facebook</a>
                <a href="https://www.linkedin.com/company/2740192/admin/" class="icon-social icon-linkedin" target="_blank">Linkedin</a>
            </div>
            <div class="site-header__nav__espace absolute inset-x-0 bottom-0 lg:hidden">
                <a href="<?php echo get_site_url(); ?>/entreprise" class="site-header__nav__espace-btn">Retour sur Exos</a>
            </div>
        </div>
        <div class="site-header__retour">
            <a href="<?php echo get_site_url(); ?>/entreprise" class="btn-secondary btn-back text-xs opacity-50">Retour sur Exos</a>
        </div>
        <div class="site-header__burger pl-5 z-30 lg:hidden">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
    </header>