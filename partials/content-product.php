<a href="<?php the_permalink(); ?>" class="d-block product-item rounded">
<?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
    <?php else : ?>
            <img src="<?php echo TEA_FILES_URL; ?>/img/article.jpg" alt="">
    <?php endif; ?>
    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
        <h4 class="text-primary"><?php the_title(); ?></h4>
        <span class="text-body"><?php the_excerpt(); ?></span>
    </div>
</a>