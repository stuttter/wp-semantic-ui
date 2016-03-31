<?php

/**
 * Semantic UI Admin
 *
 * @package Plugins/Semantic UI/Admin
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue Semantic UI
 *
 * @since 0.1.0
 */
function wp_semantic_ui_enqueue_assets() {

	// Vars
	$url = wp_semantic_ui_get_plugin_url();
	$ver = wp_semantic_ui_get_asset_version();

	// Styles
	wp_enqueue_style( 'semantic-ui',    $url . 'assets/css/semantic.min.css',   array(),                $ver );
	wp_enqueue_style( 'wp-semantic-ui', $url . 'assets/css/wp-semantic-ui.css', array( 'semantic-ui' ), $ver );

	// Scripts
	wp_enqueue_script( 'semantic-ui',    $url . 'assets/js/semantic.min.js',   array(),                $ver, true );
	wp_enqueue_script( 'wp-semantic-ui', $url . 'assets/js/wp-semantic-ui.js', array( 'semantic-ui' ), $ver, true );
}
