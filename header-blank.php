<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101445458-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-101445458-1');
    </script>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <div class="cursor"></div>
    <div class="page-transition bg-light"></div>

    