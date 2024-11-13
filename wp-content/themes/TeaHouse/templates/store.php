<?php
/**
 * Template Name: Store Template
 */
?>

<?php 
$blog_query_args = array(
    'post_type'   => 'store',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);

$blog_query = new WP_Query( $blog_query_args );


?>

<?php get_header(); ?>

    <!-- Store Start -->
<?php if ( $blog_query->have_posts() ) : ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p>
                <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
            </div>           
                    <div class="row g-4">
    
                        <?php while( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                            <?php get_template_part( 'partials/content', 'store' ); ?>
                        <?php endwhile; ?>

                    </div>   
        </div>
    </div>

    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
        <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Products</a>
    </div>

<?php endif; ?>
<?php wp_reset_postdata(); ?> 

    <!-- Store End -->

<?php get_footer(); ?>