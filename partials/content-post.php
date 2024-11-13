
<div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
    <?php else : ?>
            <img class="img-fluid" src="<?php echo TEA_FILES_URL; ?>/img/article.jpg" alt="">
    <?php endif; ?>
</div>
<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
    <div class="section-title">
        <h1 class="display-6">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>    
        </h1>
    </div>

    <p class="mb-4"><?php the_excerpt(); ?></p>
   
</div>