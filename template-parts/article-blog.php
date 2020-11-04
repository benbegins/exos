<a class="swiper-slide article-blog rounded-md overflow-hidden block" href="<?php the_permalink(); ?>">
    <div class="article-blog__container">
        <div class="article-blog__img" style="background-image:url('<?php the_post_thumbnail_url('large'); ?>')"></div>
        <div class="article-blog__content py-10 px-6 lg:px-8">
            <h3 class="h3-title mb-4"><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
        </div>     
    </div>
    <div class="cursor-over absolute inset-0"></div>
</a>