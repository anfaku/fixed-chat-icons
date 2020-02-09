<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              berkaydemir.com
 * @since             1.0.0
 * @package           fixed_chat_icons
 *
 * @wordpress-plugin
 * Plugin Name:       Fixed Chat Icons
 * Plugin URI:        berkaydemir.com
 * Description:       Wordpress Social Media Contact Plugin (WhatsApp, Telegram, ...)
 * Version:           2.0
 * Author:            Berkay Demir
 * Author URI:        berkaydemir.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fixed-chat-icons
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'fixed_chat_icons_VERSION', '1.5' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fixed-chat-icons-activator.php
 */
function activate_fixed_chat_icons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fixed-chat-icons-activator.php';
	fixed_chat_icons_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fixed-chat-icons-deactivator.php
 */
function deactivate_fixed_chat_icons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fixed-chat-icons-deactivator.php';
	fixed_chat_icons_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fixed_chat_icons' );
register_deactivation_hook( __FILE__, 'deactivate_fixed_chat_icons' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fixed-chat-icons.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fixed_chat_icons() {

	$plugin = new fixed_chat_icons();
	$plugin->run();

}

run_fixed_chat_icons();
