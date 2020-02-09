<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       b3rkaydem1r.wordpress.com
 * @since      1.0.0
 *
 * @package    fixed_chat_icons
 * @subpackage fixed_chat_icons/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    fixed_chat_icons
 * @subpackage fixed_chat_icons/includes
 * @author     Berkay Demir <b3rkaydem1r@yandex.com>
 */
class fixed_chat_icons_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fixed-chat-icons',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
