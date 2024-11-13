<?php
/**
 * Template Name: Products Template
 */
?>

<?php 
$blog_query_args = array(
    'post_type'   => 'product',
    'post_status' => 'publish',
);

$blog_query = new WP_Query( $blog_query_args );


?>

<?php get_header(); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Products</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Products Start -->
    <?php if ( $blog_query->have_posts() ) : ?>

        <div class="container-fluid product py-5">
            <div class="container py-5">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
                    <h1 class="display-6">Tea has a complex positive effect on the body</h1>
                </div>
                <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">

                <?php while( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                    <?php get_template_part( 'partials/content', 'product' ); ?>
                <?php endwhile; ?>
                    
                </div>
            </div>
        </div>
    <!-- Products End -->

    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    <?php get_footer(); ?>
