<?php

/**
 * Enqueue scripts and styles.
 */
/* 
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function verted_deregister_scripts()
{
	wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'verted_deregister_scripts');

function verted_remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'verted_remove_wp_block_library_css', 100); */

function verted_scripts()
{
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('verted-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION, 'all');


	wp_enqueue_script('jquery');
	wp_enqueue_script('verted-script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true); 
	wp_enqueue_script('verted-anim-script', get_template_directory_uri() . '/assets/js/anim.js', array(), _S_VERSION, true); 
}
add_action('wp_enqueue_scripts', 'verted_scripts');
