<?php

/**
 * Load the plugin assets
 */

 function tea_enqueue_assets() {
 
    global $wp_query;
    $args = array();
    wp_enqueue_script( 'tea-assets', TEA_HOUSE_PLUGIN_ASSETS_DIR . '/js/myloadmore.js', array( 'jquery'), '1.2' , $args );

    
    wp_localize_script( 
        'my_loadmore', 
        'misha_loadmore_params', 
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'posts' => json_encode( $wp_query->query_vars ),
            'cur_page' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
            'max_page' => $wp_query->max_num_pages,
        )
    );
}

 add_action( 'wp_enqueue_scripts', 'tea_enqueue_assets' );



add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_my_load_more_scripts() {
 
	// register our main script but do not enqueue it yet
	wp_register_script( 
		'my_loadmore', 
		TEA_HOUSE_PLUGIN_ASSETS_DIR . '/js/myloadmore.js' 
	);
 
 	wp_enqueue_script( 'my_loadmore' );

}

add_action( 'wp_ajax_loadmore', 'misha_loadmore_ajax_handler' ); // wp_ajax_{action}
add_action( 'wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler' ); // wp_ajax_nopriv_{action}

function misha_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST[ 'query' ] ), true );
	$args[ 'paged' ] = $_POST[ 'page' ] + 1; // we need next page to be loaded
	$args[ 'post_status' ] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
             get_template_part( 'partials/content' , 'post' );
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 


/**
 * Add the top level menu page.
 */
function tea_options_page() {
	add_menu_page(
		'Tea Options',
		'Tea Options',
		'manage_options',
		'tea-options',
		'tea_options_page_html'
	);
}
/**
 * Register our options page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'tea_options_page' );

function tea_options_page_html() {
    include TEA_HOUSE_PLUGIN_INCLUDES_DIR . '/options-page.php';
}

