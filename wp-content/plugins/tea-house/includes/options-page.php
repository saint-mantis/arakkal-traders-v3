 <?php
$teas_homepage_post_per_page = get_option( 'teas_homepage_post_per_page' );

if ( empty( $teas_homepage_post_per_page) ) {
    $teas_homepage_post_per_page = 3;
}


//Checks if the is submitted
if ( ! empty( $_POST['teas_save'] ) && $_POST['teas_save'] == 1 ) {

    if ( ! empty( $_POST['teas_homepage_post_number'] ) ) {
        $teas_posts_per_page = esc_attr( $_POST['teas_homepage_post_number'] );
        update_option( 'teas_homepage_post_per_page', $teas_posts_per_page, false );
    }

}
?> 

<div class="wrap">

    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    <form action="" method="post">
        <div>
            <label for="custom_option"><?php _e( 'Type of tea number of posts on the homapage', 'softuni' ); ?></label>
            <input type="number" id="tea_homepage_post_number" name="tea_homepage_post_number" value="<?php echo esc_attr( $teas_homepage_post_per_page );  ?>">
        </div>
        <div>
            <input type="submit" value="Update me">
        </div>
        <input class="primary" type="hidden" name="tea_save" value="1">
    </form>
</div>