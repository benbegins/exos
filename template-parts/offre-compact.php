<a class="offre offre-compact block p-6 mt-6 lg:p-8" href="<?php the_permalink(); ?>">
    <p class="h3-title mb-6 lg:mb-8"><?php echo ucfirst(strtolower(get_the_title())); ?></p>
    <p class="offre__legende localisation mb-2"><?php the_field('localisation'); ?></p>
    <p class="offre__legende type"><?php the_field('type_de_contrat'); ?></p>
    <?php 
        $particularite = get_field('particularite');
        if($particularite):
    ?>
    <p class="offre__legende particularite mt-2"><?php echo $particularite; ?></p>    
    <?php 
        endif; 
    ?>
    <div class="icon-arrow"></div>
    <div class="cursor-over absolute inset-0"></div>
</a>