<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   Quote_Pool
 * @author    Tim Doppenberg info@timdoppenberg.nl
 * @license   GPL-2.0+
 * @link      http://ictlab.info
 * @copyright 2013 ICT-Lab
 *
 * @wordpress-plugin
 * Plugin Name:       Quote Pool
 * Plugin URI:        http://ictlab.info
 * Description:       A plugin to display quotes picked at random from a pool
 * Version:           0.1
 * Author:            Tim Doppenberg
 * Author URI:        http://timdoppenberg.nl
 * Text Domain:       quote-pool-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/handyCAPS/quote-pool
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * TODO:
 *
 * - replace `class-quote-pool.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . '/public/class-quote-pool.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * TODO:
 *
 * - replace Quote_Pool with the name of the class defined in
 *   `class-quote-pool.php`
 */
register_activation_hook( __FILE__, array( 'Quote_Pool', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Quote_Pool', 'deactivate' ) );

/*
 * TODO:
 *
 * - replace Quote_Pool with the name of the class defined in
 *   `class-quote-pool.php`
 */
add_action( 'plugins_loaded', array( 'Quote_Pool', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * TODO:
 *
 * - replace `class-plugin-admin.php` with the name of the plugin's admin file
 * - replace Quote_Pool_Admin with the name of the class defined in
 *   `class-quote-pool-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . '/admin/class-quote-pool-admin.php' );
	add_action( 'plugins_loaded', array( 'Quote_Pool_Admin', 'get_instance' ) );

}
