<?php

/**
 * Semantic UI Hooks
 *
 * @package Plugins/Semantic UI/Hooks
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Enqueue admin assets
add_action( 'wp_enqueue_scripts',    'wp_semantic_ui_enqueue_assets', -99 );
add_action( 'admin_enqueue_scripts', 'wp_semantic_ui_enqueue_assets', -99 );
