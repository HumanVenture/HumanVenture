<?php
	require_once('wp_bootstrap_navwalker.php');

	add_theme_support('post-thumbnails' );

	function modify_the_content_more_link() {
		return '';
	}

	add_filter('the_content_more_link', 'modify_the_content_more_link');

	function hv_serikoff_theme_setup(){
		load_theme_textdomain('hv-serikoff', get_template_directory() . '/languages');
	}

	add_action('after_setup_theme', 'hv_serikoff_theme_setup');

	Timber::$dirname = array('templates');
?>
