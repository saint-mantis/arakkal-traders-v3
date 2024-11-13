<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="store-item position-relative text-center">

        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
        <?php else : ?>
            <img class="img-fluid" src="<?php echo TEA_FILES_URL; ?>/img/store-product-1.jpg" alt="">
        <?php endif; ?>

            <div class="p-4">
                <div class="text-center mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                </div>
                <h4 class="mb-3"><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
                <h4 class="text-primary">$19.00</h4>
            </div>
            <div class="store-overlay">
                <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
            </div>
    </div>
</div>

                        
