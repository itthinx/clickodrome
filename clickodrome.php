<?php
/**
 * Plugin Name: Clickodrome
 * Plugin URI: https://github.com/itthinx/clickodrome
 * Description: Traces every click and shouts out about it on the browser concole.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: itthinx
 * Author URI: https://www.itthinx.com
 * Donate-Link: https://www.itthinx.com/shop/
 * License: GPLv3
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CLICKODROME_VERSION', '1.0.0' );
define( 'CLICKODROME_PLUGIN_URL', trailingslashit( plugins_url( 'clickodrome' ) ) );

/**
 * Plugin class.
 */
class Clickodrome {

	public static function boot() {
		add_action( 'init', array( __CLASS__, 'init' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'wp_enqueue_scripts' ) );
	}

	/**
	 * Register actions and filters.
	 */
	public static function init() {
	}

	/**
	 * Scripts.
	 */
	public static function wp_enqueue_scripts() {
		wp_register_script(
			'clickodrome',
			CLICKODROME_PLUGIN_URL . 'js/clickodrome.js',
			array(),
			CLICKODROME_VERSION
		);
		wp_enqueue_script( 'clickodrome' );
	}
}

Clickodrome::boot();
