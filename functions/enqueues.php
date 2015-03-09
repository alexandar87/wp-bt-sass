<?php

function wpbts_enqueues() {

	wp_register_script('jquery', get_bloginfo('template_url').'/assets/javascripts/jquery-1.11.2.min.js', __FILE__, false, '1.11.2', true);
	wp_enqueue_script( 'jquery' );


  	wp_register_style('wp-bt-sass-css', get_template_directory_uri() . '/css/screen.css', false, null);
	wp_enqueue_style('wp-bt-sass-css');

  	wp_register_script('modernizr', get_template_directory_uri() . '/assets/javascripts/modernizr-2.6.2.min.js', false, null, false);
	wp_enqueue_script('modernizr');


	wp_register_script('bst-js', get_template_directory_uri() . '/assets/javascripts/min/scripts-min.js', false, null, true);
	wp_enqueue_script('bst-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'wpbts_enqueues', 100);
