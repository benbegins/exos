<?php get_header(); ?>

<div class="page-pt">
    <section class="section-pad-top">
        <div class="container">
            <h1 class="h1-title"><?php the_title(); ?></h1>
            <div class="mt-16 md:mt-24 lg:mt-32">
                <div class="page-content zone-text lg:w-8/12 lg:ml-auto lg:pr-24">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('template-parts/question-demande'); ?>

</div>

<?php get_footer(); ?>