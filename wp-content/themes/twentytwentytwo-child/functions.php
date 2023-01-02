<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

add_action('init', function() {
	register_post_type('blogpost', [
		'public' => true,
		'label' => 'BlogPost',
		'show_in_graphql' => true,
		'graphql_single_name' => 'BlogPost',
		'graphql_plural_name' => 'BlogPosts'
	]);
});

function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'parenthandle' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}