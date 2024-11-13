<?php
/**
 * Template Name: Homepage
 */
?>
<?php

$teas_homepage_post_per_page = get_option( 'teas_homepage_post_per_page' );

if( empty ( $teas_homepage_post_per_page ) ) {
    $teas_homepage_post_per_page = 3;
}
 
$tea_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => $teas_homepage_post_per_page,
    'meta_query'     => array(
        'key'     => 'is_type_tea',
        'value'   => 1,
        'compare' => '=',
    ), 
);

$tea_query = new WP_Query( $tea_args );

?>
<?php get_header(); ?>
<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?php echo TEA_FILES_URL; ?>/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 text-center">
                                <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark">TEA House</strong></p>
                                <h1 class="display-1 text-dark mb-4 animated zoomIn">Organic & Quality Tea Production</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                
        </div>        
    </div>
</div>
<!-- Carousel End --> 

<?php if ( $tea_query->have_posts() ) : ?>
    <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                    
    <?php while( $tea_query->have_posts() ) : $tea_query->the_post(); ?>
    
    <?php get_template_part( 'partials/content', 'product' ); ?>

<?php endwhile; ?>
</div>
<?php endif; ?>


<?php get_footer(); ?>