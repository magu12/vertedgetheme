<?php


add_theme_support('title-tag');

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}

include_once 'core/enqueues.php';
include_once 'core/cpts.php';
include_once 'core/svgs.php';
include_once 'core/theme-functions.php';
include_once 'core/shortcodes.php';
include_once 'core/general-actions.php';
include_once 'core/general-filters.php';
