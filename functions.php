<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style')  );
}





/* if ( ! function_exists( 'future_continue_reading_link' ) ) {
    function future_continue_reading_link() {
	return '<span class="entry-more-link-wrapper"><a href="'. esc_url( get_permalink() ) . '" class="entry-more-link entry-more-link-excerpt btn btn-primary"><span>'. __( 'Seguir Llegint', 'future' ) .'</span></a></span>';
    }
} */







function remove_readmore() {
    remove_filter( 'excerpt_length', 'future_excerpt_length' );
	remove_filter( 'the_content_more_link', 'future_content_more_link', 10, 2 );
	remove_filter( 'excerpt_more', 'future_auto_excerpt_more' );
	remove_filter( 'get_the_excerpt', 'future_custom_excerpt_more' );

}
// Call 'remove_thematic_actions' during WP initialization
add_action('init','remove_readmore');




/**********************************************
* Filters
**********************************************/

/** Sets the post excerpt length. */
add_filter( 'excerpt_length', 'future_excerpt_length_cat' );
function future_excerpt_length_cat( $length ) {
	return 50;
}

/** Returns a "Read more" link for content */
add_filter( 'the_content_more_link', 'future_content_more_link_cat', 10, 2 );
function future_content_more_link_cat( $more_link, $more_link_text ) {
	return str_replace( array( 'more-link', $more_link_text ), array( 'entry-more-link entry-more-link-content btn btn-primary', '<span>'. __( 'Seguir llegint', 'future' ) .'</span>' ), $more_link );
}

/** Returns a "Read more" link for excerpts */
function future_continue_reading_link_cat() {
	return '<span class="entry-more-link-wrapper"><a href="'. esc_url( get_permalink() ) . '" class="entry-more-link entry-more-link-excerpt btn btn-primary"><span>'. __( 'Seguir llegint', 'future' ) .'</span></a></span>';
}

/** Replaces "[...]" (appended to automatically generated excerpts) with future_continue_reading_link(). */
add_filter( 'excerpt_more', 'future_auto_excerpt_more_cat' );
function future_auto_excerpt_more_cat( $more ) {
	return ' <span class="ellipsis">&hellip;</span> ' . future_continue_reading_link_cat();
}	

/** Adds a pretty "Read more" link to custom post excerpts. */
add_filter( 'get_the_excerpt', 'future_custom_excerpt_more_cat' );
function future_custom_excerpt_more_cat( $output ) {
	
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= ' <span class="ellipsis">&hellip;</span> ' . future_continue_reading_link_cat();
	}
	return $output;

}
