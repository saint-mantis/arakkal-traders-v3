<?php get_header(); ?>

<?php 
$query_args = array(
    'post_type'   => 'post',
    'post_status' => 'publish',
);

$wp_query = new WP_Query( $query_args );


?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown"><?php the_archive_title(); ?></h1>
            
        </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <?php if ( $wp_query->have_posts() ) : ?>

            <?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

            <?php get_template_part( 'partials/content' , 'post' ); ?>

            <?php endwhile; ?>

            <?php else : ?>
                    Sorry, there is nothing for display!
            <?php endif; ?>

        

            <?php global $wp_query;
                if (  $wp_query->max_num_pages > 1 ) : ?>

                    <button id="load-more" class="btn btn-primary rounded-pill py-3 px-5 misha_loadmore">Load More</button>

          <?php endif; ?>

        </div>

        

       
    </div>
</div>


    <?php get_footer(); ?>