<?
if ( ! function_exists( 'YC_Menus' ) ) :
function YC_Menus() {
	register_nav_menus( array(

		'main-menu'   => __( 'القائمة الاساسية', 'YourColor' ),
		'mobile-menu'   => __( 'قائمة الموبايل', 'YourColor' ),

		'top-menu'   => __( 'القائمة الفوتر', 'YourColor' ),

	) );
}
endif;
add_action( 'after_setup_theme', 'YC_Menus' );