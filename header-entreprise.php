<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <div class="cursor"></div>

    <header class="site-header fixed w-full z-30 flex items-center justify-between px-5 bg-light lg:px-10">
        <div class="site-header__logo flex-grow z-30 lg:flex-none lg:mr-10">
            <a href="<?php echo get_site_url(); ?>/entreprise"></a>
        </div>
        <div class="site-header__nav bg-dark fixed inset-0 text-light text-center text-sm z-20 flex flex-col justify-center lg:static lg:block lg:text-gray lg:bg-transparent lg:flex-grow lg:text-xs">
            <div class="site-header__nav__main uppercase font-medium">
                <?php 
                wp_nav_menu(array( 
                    'theme_location' => 'menu-entreprise',
                )); 
                ?>     
            </div>
            <div class="site-header__nav__social lg:hidden">
                <a href="https://www.facebook.com/exos.recrutement/" class="icon-social icon-facebook" target="_blank">Facebook</a>
                <a href="https://www.linkedin.com/company/2740192/admin/" class="icon-social icon-linkedin" target="_blank">Linkedin</a>
            </div>
            <div class="site-header__nav__espace absolute inset-x-0 bottom-0 lg:hidden">
                <a href="<?php echo get_site_url(); ?>" class="site-header__nav__espace-btn">Vous êtes un candidat ?</a>
            </div>
        </div>
        <div class="site-header__cta">
            <a href="<?php echo get_site_url(); ?>/entreprise/contact" class="bg-blue text-light text-sm sm:text-base lg:rounded-md">Nous <br>contacter</a>
        </div>
        <div class="site-header__espaces hidden lg:flex text-xs leading-tight text-gray font-medium">
            <a href="<?php echo get_site_url(); ?>" class="mx-5">Espace <br>CANDIDAT</a>
            <a class="text-blue">Espace <br>ENTREPRISE</a>
        </div>
        <div class="site-header__burger pl-5 z-30 lg:hidden">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
    </header>