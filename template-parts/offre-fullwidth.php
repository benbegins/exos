<a class="offre offre-fullwidth block p-6 mt-6 lg:px-16 lg:py-20 lg:mt-8 lg:flex lg:items-center" href="<?php the_permalink(); ?>">
    <div class="lg:w-1/2">
        <p class="h3-title mb-6 lg:mb-0"><?php echo ucfirst(strtolower(get_the_title())); ?></p>    
    </div>
    <div class="lg:w-1/4 lg:mx-auto">
        <p class="offre__legende localisation mb-2"><?php the_field('localisation'); ?></p>
        <p class="offre__legende type"><?php the_field('type_de_contrat'); ?></p>    
        <?php 
            $particularite = get_field('particularite');
            $particularite_100 = substr($particularite, 0, 100);
            if($particularite):
        ?>
        <p class="offre__legende particularite mt-2">
            <?php 
            echo $particularite_100;

            if(strlen($particularite) > 100){
                echo "(...)";
            }
            ?>
        </p>    
        <?php 
            endif; 
        ?>
    </div>
    <div class="icon-arrow"></div>
</a>