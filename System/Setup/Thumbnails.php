<?php
// retrieves the attachment ID from the file URL
function pippin_get_image_id($image_url) {
	global $wpdb;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}
if ( ! function_exists( 'yourcolor_setup' ) ) :

function yourcolor_setup() {

	// Add RSS feed links to <head> for posts and comments.

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'resize2', 800, 400, true );
	add_image_size( 'resize3', 295, 220, true );
	add_image_size( 'resize4', 288, 190, true );
	add_image_size( 'resize5', 612, 400, true );
	add_image_size( 'resize6', 100, 80, true );
	add_image_size( 'resize7', 160, 110, true );
	add_image_size( 'teamFlag', 42, 45, true );
	add_image_size( 'league', 50, 63, true );
	add_image_size( 'album',300,300,true );


}

endif;

add_action( 'after_setup_theme', 'yourcolor_setup' );

////