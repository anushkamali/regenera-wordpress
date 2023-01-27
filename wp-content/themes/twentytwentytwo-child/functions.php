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

add_action('graphql_register_types', function () {

    // PascalCase here
    $customposttype_graphql_single_name = "BlogPost";

    register_graphql_field('RootQueryTo' . $customposttype_graphql_single_name . 'ConnectionWhereArgs', 'blogcategory', [
        // Integer because age
        'type' => 'String',
        'description' => __('The ID of the post object to filter by', 'your-textdomain'),
    ]);
});

add_filter('graphql_post_object_connection_query_args', function ($query_args, $source, $args, $context, $info) {

    $post_object_id = $args['where']['blogcategory'];

    if (isset($post_object_id)) {
        $query_args['meta_query'] = [
            [
                // The key should be age, not artist_metadata
                'key' => 'blogcategory',
                'value' => $post_object_id,
                'compare' => '='
            ]
        ];
    }

    return $query_args;
}, 10, 5);

function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'parenthandle' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}

