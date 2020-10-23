<a class="swiper-slide article-blog article-blog__fullwidth rounded-md overflow-hidden block mb-6 lg:mb-8 lg:relative" href="<?php the_permalink(); ?>">
    <div class="article-blog__container lg:flex lg:items-center">
        <div class="article-blog__img lg:w-1/3" style="background-image:url('<?php the_post_thumbnail_url('large'); ?>')"></div>
        <div class="article-blog__content py-10 px-6 lg:w-1/2 lg:mx-auto">
            <h3 class="h3-title mb-4"><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
        </div>     
    </div>
    <div class="icon-arrow hidden lg:block"></div>
</a>