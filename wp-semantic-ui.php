<?php

/*
 * Plugin Name: WP Semantic UI
 * Plugin URI:  http://wordpress.org/plugins/wp-semantic-ui/
 * Author:      John James Jacoby
 * Author URI:  https://jjj.blog
 * Version:     0.1.0
 * Description: User Interface is the language of the web
 * License:     GPLv2 or later
 */

/**
 * Enqueue Semantic UI
 *
 * @since 0.1.0
 */
function _wp_semantic_ui() {

	// Get the plugin path
	$plugin_path = plugin_dir_path( __FILE__ ) . 'wp-semantic-ui/';

	// Common files
	require_once $plugin_path . 'includes/admin.php';
	require_once $plugin_path . 'includes/hooks.php';
}
add_action( 'plugins_loaded', '_wp_semantic_ui' );

/**
 * Return the plugin's URL
 *
 * @since 0.1.0
 *
 * @return string
 */
function wp_semantic_ui_get_plugin_url() {
	return plugin_dir_url( __FILE__ ) . 'wp-semantic-ui/';
}

/**
 * Return the asset version
 *
 * @since 0.1.0
 *
 * @return int
 */
function wp_semantic_ui_get_asset_version() {
	return 201611150001;
}
