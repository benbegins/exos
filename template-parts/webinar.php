<?php 
$terms=get_the_terms($post->ID, 'intervenant');
foreach ($terms as $term) {
    $nom_intervenant = $term->name;
} 
?>

<a href="<?php the_permalink(); ?>" class="webinar mb-6 lg:mb-8 md:flex">
    <div class="md:w-1/3">
        <div class="webinar__img" style="background-image:url('<?php the_post_thumbnail_url('medium_large'); ?>');">
            <div class="webinar__theme"><?php the_field('theme_general'); ?></div>
        </div>    
    </div>
    <div class="px-6 py-10 md:w-2/3 lg:w-1/2 lg:mx-auto flex flex-col justify-center">
        <p class="h3-title text-gray"><?php echo $nom_intervenant; ?></p>
        <h3 class="h3-title"><?php the_title(); ?></h3>
        <p class="text-gray mt-4 lg:mt-5">Le <?php the_field('date'); ?> de <?php the_field('heure_de_debut'); ?> à <?php the_field('heure_de_fin'); ?></p>
        <p class="text-gray uppercase">Gratuit</p>
    </div>
    <div class="icon-arrow"></div>
</a>