<?php 


class post {

	public function addComment($name, $id, $comment, $email) {

		$cid = wp_insert_post(

			array(

				'post_title'=>$name,

				'post_type'=>'comments_'.$id.'',

				'post_status'=>'publish',

				'post_content'=>strip_tags($comment)

			)

		);

		update_post_meta($cid, 'email', $email);

	}

	public function list_comments($id) {

		return get_posts(array('post_type'=>'comments_'.$id.'', 'order'=>'ASC', 'posts_per_page'=>50));

	}

	public function get_views($id) {

		$views = (get_post_meta($id, 'views', true) == '') ? '0' : get_post_meta($id, 'views', true);	

		return $views;

	}

	public function get_views_day($id) {

		$views = (get_post_meta($id, 'views_'.date('d-m-Y').'', true) == '') ? '0' : get_post_meta($id, 'views_'.date('d-m-Y').'', true);	

		return $views;

	}

	public function get_views_month($id) {

		$views = (get_post_meta($id, 'views_'.date('d-m').'', true) == '') ? '0' : get_post_meta($id, 'views_'.date('d-m').'', true);	

		return $views;

	}

	public function get_views_year($id) {

		$views = (get_post_meta($id, 'views_'.date('Y').'', true) == '') ? '0' : get_post_meta($id, 'views_'.date('Y').'', true);	

		return $views;

	}

	public function get_likes($id) {

		return get_post_meta($id, 'likes', true);

	}

	public function set_like($id) {

		if($_COOKIE['liked_'.$id.''] != 'yes') {

			update_post_meta($id, 'likes', get_post_meta($id, 'likes', true)+1);

			setcookie('liked_'.$id.'', 'yes', time() + (86400 * 30), "/"); // 86400 = 1 day

		}else if( get_post_meta($id, 'likes', true) != '0' ){

			update_post_meta($id, 'likes', get_post_meta($id, 'likes', true)-1);

			setcookie('liked_'.$id.'', '', time() + (86400 * 30), "/"); // 86400 = 1 day

		}else if( get_post_meta($id, 'likes', true) == '0' ){

			update_post_meta($id, 'likes', '0');

			setcookie('liked_'.$id.'', '', time() + (86400 * 30), "/"); // 86400 = 1 day

		}

	}

	public function check_liked($id) {

		if($_COOKIE['liked_'.$id.''] != 'yes') {

			return '';

		}else {

			return 'active';

		}

	}

}
add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
    if( isset( $attr['sizes'] ) )
        unset( $attr['sizes'] );

    if( isset( $attr['srcset'] ) )
        unset( $attr['srcset'] );

    return $attr;

 }, PHP_INT_MAX );

// Override the calculated image sizes
add_filter( 'wp_calculate_image_sizes', '__return_false',  PHP_INT_MAX );

// Override the calculated image sources
add_filter( 'wp_calculate_image_srcset', '__return_false', PHP_INT_MAX );

// Remove the reponsive stuff from the content
remove_filter( 'the_content', 'wp_make_content_images_responsive' );
date_default_timezone_set('Africa/Cairo');


function basic_wp_seo() {

  global $page, $paged, $post;

	// title

	$title_custom = get_post_meta($post->ID, 'mm_seo_title', true);

	$url = ltrim(esc_url($_SERVER['REQUEST_URI']), '/');

	$name = get_bloginfo('name', 'display');

	$title = trim(wp_title('', false));

	$cat = single_cat_title('', false);

	$tag = single_tag_title('', false);

	$search = get_search_query();

	if (is_home() || is_front_page()) $seo_title = $name;

	elseif (is_singular())            $seo_title = $title;

	elseif (is_tag())                 $seo_title = 'ارشيف كلمة: ' . $tag;

	elseif (is_category())            $seo_title = 'ارشيف قسم: ' . $cat;

	elseif (is_archive())             $seo_title = $title;

	elseif (is_search())              $seo_title = 'بحث: ' . $search;

	elseif (is_404())                 $seo_title = '404 - تعذر الوصول: ' . $url;

	else                              $seo_title = $name;

	$output .= "\t\t" . '<title>' . esc_attr($seo_title . $page_number) . '</title>' . "\n";

	return $output;

}

////
/////////////////////////////////////////////
/// CPanel
/////////////////////////////////////////////
require_once ThemeURI.'/System/CPanel/Setup.php';
/////////////////////////////////////////////
/// Menus
/////////////////////////////////////////////
require_once ThemeURI.'/System/Setup/Menus.php';
/////////////////////////////////////////////
/// Thumbnails
/////////////////////////////////////////////
require_once ThemeURI.'/System/Setup/Thumbnails.php';
/////////////////////////////////////////////
/// Breadcrumbs
/////////////////////////////////////////////
require_once ThemeURI.'/System/Setup/Breadcrumbs.php';
/////////////////////////////////////////////
/// Pagination
/////////////////////////////////////////////
require_once ThemeURI.'/System/Setup/Pagination.php';
/////////////////////////////////////////////
/// Single Views
/////////////////////////////////////////////
require_once ThemeURI.'/System/Setup/Views.php';
/////////////////////////////////////////////
/// Custom Meta Box
/////////////////////////////////////////////
require_once ThemeURI.'/System/CMB2/functions.php';
require_once ThemeURI.'/System/CMB2/CMB2.php';
