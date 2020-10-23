<a class="offre block p-6 mt-6 lg:p-8" href="<?php the_permalink(); ?>">
    <p class="h3-title mb-6 lg:mb-8"><?php echo ucfirst(strtolower(get_the_title())); ?></p>
    <p class="offre__legende localisation mb-2"><?php the_field('localisation'); ?></p>
    <p class="offre__legende type"><?php the_field('type_de_contrat'); ?></p>
    <div class="icon-arrow"></div>
</a>