<?php get_header(); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown"><?php the_archive_title(); ?></h1>
            
        </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <?php if ( have_posts() ) : ?>

            <?php while( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'partials/content' , 'post' ); ?>

            <?php endwhile; ?>

            <?php else : ?>
                    Sorry, there is nothing for display!

            <?php endif; ?>

        

            <div class="pagination">
            <?php 
                the_posts_pagination( array(
                    'mid_size'  => 1,
                    'prev_text' => __('Previous' , 'softuni' ),
                    'next_text' => __( 'Next' , 'softuni' ),
                ) );
            ?>
            </div>

        </div>
    </div>
</div>


    <?php get_footer(); ?>