<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       b3rkaydem1r.wordpress.com
 * @since      1.0.0
 *
 * @package    fixed_chat_icons
 * @subpackage fixed_chat_icons/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    fixed_chat_icons
 * @subpackage fixed_chat_icons/admin
 * @author     Berkay Demir <b3rkaydem1r@yandex.com>
 */
class fixed_chat_icons_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		// Admin Menu
		add_action( 'admin_menu', [$this, 'fixed_chat_icons_admin_menu']);

		// Ajax
		add_action( 'wp_ajax_fixed_chat_icons_ajax_whatsapp', [$this, 'fixed_chat_icons_ajax_whatsapp']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_telegram', [$this, 'fixed_chat_icons_ajax_telegram']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_messenger', [$this, 'fixed_chat_icons_ajax_messenger']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_twitter', [$this, 'fixed_chat_icons_ajax_twitter']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_instagram', [$this, 'fixed_chat_icons_ajax_instagram']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_email', [$this, 'fixed_chat_icons_ajax_email']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_call', [$this, 'fixed_chat_icons_ajax_call']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_live_chat', [$this, 'fixed_chat_icons_ajax_live_chat']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_size', [$this, 'fixed_chat_icons_ajax_size']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_mobile_size', [$this, 'fixed_chat_icons_ajax_mobile_size']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_show', [$this, 'fixed_chat_icons_ajax_show']);
		add_action( 'wp_ajax_fixed_chat_icons_ajax_align', [$this, 'fixed_chat_icons_ajax_align']);

		// Footer
		add_filter('get_footer', [$this, 'fci_footer_modify']);
		add_filter('wp_footer', [$this, 'fci_footer_modify']);


	}

	// Footer

	function fci_footer_modify(){
		require(__DIR__).'/partials/fixed-chat-icons-admin-footer.php';
	}

	// Ajax

	function fixed_chat_icons_ajax_whatsapp(){
		update_option('fci_whatsapp', sanitize_text_field($_POST['whatsapp']));
		wp_die();
	}

	function fixed_chat_icons_ajax_instagram(){
		update_option('fci_instagram', sanitize_text_field($_POST['instagram']));
		wp_die();
	}

	function fixed_chat_icons_ajax_twitter(){
		update_option('fci_twitter', sanitize_text_field($_POST['twitter']));
		wp_die();
	}

	function fixed_chat_icons_ajax_email(){
		update_option('fci_email', sanitize_text_field($_POST['email']));
		wp_die();
	}

	function fixed_chat_icons_ajax_telegram(){
		update_option('fci_telegram', sanitize_text_field($_POST['telegram']));
		wp_die();
	}

	function fixed_chat_icons_ajax_messenger(){
		update_option('fci_messenger', sanitize_text_field($_POST['messenger']));
		wp_die();
	}

	function fixed_chat_icons_ajax_call(){
		update_option('fci_call', sanitize_text_field($_POST['call']));
		wp_die();
	}

	function fixed_chat_icons_ajax_live_chat(){
		update_option('fci_live_chat', sanitize_text_field($_POST['live_chat']));
		wp_die();
	}

	function fixed_chat_icons_ajax_size(){
		update_option('fci_size', sanitize_text_field($_POST['size']));
		wp_die();
	}

	function fixed_chat_icons_ajax_mobile_size(){
		update_option('fci_mobile_size', sanitize_text_field($_POST['mobile_size']));
		wp_die();
	}

	function fixed_chat_icons_ajax_align(){
		update_option('fci_align', sanitize_text_field($_POST['align']));
		wp_die();
	}

	function fixed_chat_icons_ajax_show(){
		update_option('fci_show', sanitize_text_field($_POST['show']));
		wp_die();
	}

	// Admin Menu
	function fixed_chat_icons_admin_menu(){
		add_menu_page( 
			__( 'Fixed Chat Icons Settings', 'textdomain' ),
			'Fixed Chat Icons',
			'manage_options',
			'fci',
			[$this, 'fixed_chat_icons_admin_menu_page'],
			plugins_url( 'fixed-chat-icons/admin/img/admin-menu-icon.png' ),
			61
		); 
	}
	// Admin Settings Page
	function fixed_chat_icons_admin_menu_page(){
		require(__DIR__).'/partials/fixed-chat-icons-admin-settings.php';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style( 'admin', plugins_url( 'css/admin.css', __FILE__ ), false, $this->version, 'all' ); 
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/fixed-chat-icons-admin.js', array( 'jquery' ), $this->version, false );
		wp_register_script( 'footer-radio-buttons', '', [], '', true );
		wp_enqueue_script( 'footer-radio-buttons'  );

		$show = 0;
		if(get_option('fci_show')){
			$show = get_option('fci_show');
		}

		$align = 0;
		if(get_option('fci_align')){
			$align = get_option('fci_align');
		}

		wp_add_inline_script( 'footer-radio-buttons', "
		jQuery(function( $ ) {
			'use strict';
		
		$('input[name=fci_show][value=' + ".$show." + ']').prop('checked', true);
		$('input[name=fci_align][value=' + ".$align." + ']').prop('checked', true);
		
		});" );

	}

}
