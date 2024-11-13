<?php
/*
* Plugin Name: Tea plugin
* Plugin URI: https://softuni.bg
* Description: Our first plugin for the course
* Version: 1.0.0
* Requires at least: 5.0
* Requires PHP: 8.0
* Author: SoftUni
* Author URI: https://softuni.bg/
* License: GPL v2 or later
* License URI:
https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: https://example.com/myplugin/
* Text Domain: softuni
* Domain Path: /languages
*/

if ( ! defined( 'TEA_HOUSE_PLUGIN_DIR' ) ) {
    define( 'TEA_HOUSE_PLUGIN_DIR', plugin_dir_path(__FILE__) . 'includes' );
}

if ( ! defined( 'TEA_HOUSE_PLUGIN_INCLUDES_DIR' ) ) {
    define( 'TEA_HOUSE_PLUGIN_INCLUDES_DIR', plugin_dir_path(__FILE__) . 'includes' );
}

if ( ! defined( 'TEA_HOUSE_PLUGIN_ASSETS_DIR' ) ) {
    define( 'TEA_HOUSE_PLUGIN_ASSETS_DIR', plugins_url('assets', __FILE__) );
}

require TEA_HOUSE_PLUGIN_INCLUDES_DIR . '/functions.php';
require TEA_HOUSE_PLUGIN_INCLUDES_DIR . '/cpt-product.php';

