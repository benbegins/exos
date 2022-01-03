<?php 
/*
Template Name: Création Dossier de Candidature
*/
acf_form_head();
get_header();
?>

<div class="page-pt dossier-candidature">

    <section class="section-pad">
        <div class="container">
            <h1 class="h1-title lg:w-3/4">Dossier de candidature</h1>
        </div>
    </section>

    <section class="section-pad-bot">
        <div id="content" class="container" role="main">

        <?php 
        $args = array(
            'post_type'         => 'collaborateur',
            'posts_per_page'    => -1,
        );
        $query = new WP_Query($args);

        if($query->have_posts()):

            echo '<label for="collaborateur">Sélectionnez votre consultant Exos</label><br>
                <select name="collaborateur" id="select-collaborateur">
                    <option value="">-- Votre consultant --</option>';

            while($query->have_posts()):
                $query->the_post();

                $nom = get_the_title();
                $email = get_field('email');

                echo '<option value="'. $email .'">' . $nom . '</option>';
            endwhile;

            echo '</select>';

        endif;
        wp_reset_postdata();
        ?>

        <div id="form-dossier-candidature" class="mt-16 hidden">
            <?php
                $form_shortcode = get_field('shortcode_formulaire');
                
                echo do_shortcode($form_shortcode);
            ?>
            <p class="text-center text-lg mt-10 italic">Nous vous remercions pour le temps que vous avez consacré à remplir ce dossier.</p>
        </div>
        
        
        </div>
    </section>

</div>


<script type="text/javascript">
    
</script>


<?php 
get_footer();
?>