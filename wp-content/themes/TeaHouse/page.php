<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <?php while( have_posts() ) : the_post(); ?>
        <div <?php post_class( 'container-xxl py-5' ); ?>>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                            <img class="img-fluid" src="<?php echo TEA_FILES_URL; ?>/img/article.jpg" alt="">
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title">
                            <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                            <h1 class="display-6"><?php the_title(); ?></h1>
                        </div>
                        <p class="mb-4"><?php the_content(); ?></p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>

    <?php get_footer(); ?>