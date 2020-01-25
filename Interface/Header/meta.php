<?php
function add_meta_tags() {
    global $post;?>
    <?php if(is_home()){ ?>
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<title><?php echo $title_home; ?></title>
<?php }else{ ?>
<title><?php bloginfo('name'); ?></title>
<?php } ?>
<?php 
	$description_home = get_option('s_description_home');
	if(!empty($description_home)){ 
?>
<meta name="description" itemprop="description" content="<?php echo $description_home; ?>" />
<?php }else{ ?>
<meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>" />
<?php } ?>
<?php 
	$tags_home = get_option('s_tags_home');
	if(!empty($tags_home)){ 
?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tags_home; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:title" content="<?php echo $title_home?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<?php } ?>
<?php 
	$description_home = get_option('s_description_home');
	if(!empty($description_home)){ 
?>
<meta property="og:description" content="<?php echo $description_home; ?>"/>
<?php }else{ ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_404()){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
<?php $s404 = get_option('s_404'); ?>
<?php if(!empty($s404)) { ?>
<?php 
$title_home = get_option('s_title_home');
if(!empty($title_home)){ 
?>
<title><?php echo $s404; ?> | <?php echo $title_home; ?></title>
<?php }else{ ?>
<title><?php echo $s404; ?> | <?php bloginfo('name'); ?></title>
<?php } ?>
<?php }else{ ?>
<?php 
$title_home = get_option('s_title_home');
if(!empty($title_home)){ 
?>
<title><?php _e( 'خطأ 404' , 'YourColor' ); ?> | <?php echo $title_home; ?></title>
<?php }else{ ?>
<title><?php _e( 'خطأ 404' , 'YourColor' ); ?> | <?php bloginfo('name'); ?></title>
<?php } ?>
<?php } ?>
<?php 
	$description_home = get_option('s_description_home');
	if(!empty($description_home)){ 
?>
<meta name="description" itemprop="description" content="<?php echo $description_home; ?>" />
<?php }else{ ?>
<meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>" />
<?php } ?>
<?php 
	$tags_home = get_option('s_tags_home');
	if(!empty($tags_home)){ 
?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tags_home; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<?php $s404 = get_option('s_404'); ?>
<?php if(!empty($s404)) { ?>
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:title" content="<?php echo $s404; ?> | <?php echo $title_home?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php echo $s404; ?> | <?php bloginfo('name'); ?>" />
<?php } ?>
<?php }else{ ?>
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:title" content="<?php _e( 'خطأ 404' , 'YourColor' ); ?> | <?php echo $title_home?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php _e( 'خطأ 404' , 'YourColor' ); ?> | <?php bloginfo('name'); ?>" />
<?php } ?>
<?php } ?>
<?php 
	$description_home = get_option('s_description_home');
	if(!empty($description_home)){ 
?>
<meta property="og:description" content="<?php echo $description_home; ?>"/>
<?php }else{ ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
<?php 
//////////////////////////////////////////////
//////////////////////////////////////////////
}else if(is_category() ){ 
global $wpdb
//////////////////////////////////////////////
//////////////////////////////////////////////
?>
<?php
$category = get_the_category(); 
////////////////////////////////
////////////////////////////////
$cat_id   = $category[0]->term_id;
////////////////////////////////
////////////////////////////////
$custom_data = get_option("category_".$cat_id);
$title_cat = $custom_data['title_seo']; 
$descr_cat = $custom_data['description_seo']; 
$tag_cat   = $custom_data['tag_seo']; 
////////////////////////////////
////////////////////////////////
if(!empty($title_cat)) { 
?>
<title><?php echo $title_cat; ?></title>
<?php }else{ ?>
<title><?php single_cat_title(); ?></title>
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta name="description" itemprop="description" content="<?php echo $descr_cat; ?>" />
<?php }else{ ?>
<meta name="description" itemprop="description" content="<?php echo category_description($cat_id); ?>" />
<?php } ?>
<?php if(!empty($tag_cat)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tag_cat; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<?php 
if(!empty($title_cat)) { 
?>
<meta property="og:title" content="<?php echo $title_cat; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta property="og:description" content="<?php echo $descr_cat; ?>"/>
<?php }else{ ?>
<meta property="og:description" content="<?php echo category_description($cat_id); ?>"/>
<?php } ?>
<meta property="og:type" content="video.movie" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>


    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tag()){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
<?php
$category = get_the_category(); 
////////////////////////////////
////////////////////////////////
$cat_id   = $category[0]->term_id;
////////////////////////////////
////////////////////////////////
?>
<title><?php single_cat_title(); ?></title>
<meta name="description" itemprop="description" content="<?php echo category_description($cat_id); ?>" />
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<meta property="og:description" content="<?php echo category_description($cat_id); ?>"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>

    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tax('search')){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
<?php
$category = get_the_category(); 
////////////////////////////////
////////////////////////////////
$cat_id   = $category[0]->term_id;
////////////////////////////////
////////////////////////////////
?>

<title><?php single_cat_title(); ?> | <?php echo get_option('name_local')?></title>
<meta name="description" itemprop="description" content="<?php echo category_description($cat_id); ?>" />
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<meta property="og:description" content="<?php echo category_description($cat_id); ?>"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>





    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_single()){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
    
<?php
	$title_single = get_post_meta( $post->ID , 'name_seo' , true );  
	$desc_single  = get_post_meta( $post->ID , 'desc_seo' , true );  
	$tags_single  = get_post_meta( $post->ID , 'tags_seo' , true );  
	$img_single   = get_post_meta( $post->ID , 'img_social' , true ); 
	if(!empty($title_single)){  
?>
<title><?php echo $title_single; ?></title>
<?php }else{ ?>
<title><?php the_title(); ?></title>
<?php } ?>
<?php if(!empty($desc_single)){ ?>
<meta name="description" itemprop="description" content="<?php echo $desc_single; ?>" />
<?php } ?>
<?php if(!empty($tags_single)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tags_single; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php if( !empty($img_single)){ ?>
<meta property="og:image" content="<?php echo $img_single; ?>" />
<?php }else{ ?>
<meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' ); ?>" />
<?php } ?>
<?php if(!empty($title_single)){ ?>
<meta property="og:title" content="<?php echo $title_single; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php the_title(); ?>" />
<?php } ?>
<?php if(!empty($desc_single)){ ?>
<meta property="og:description" content="<?php echo $desc_single; ?>"/>
<?php }else{ ?>
<?php 
	$content_single = substr( $post->post_content , 0, 156);
	$content_single = strip_tags($content_single, '')
?>
<meta property="og:description" content="<?php echo $content_single; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_page()){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
<?php
	$title_single = get_post_meta( $post->ID , 'name_seo' , true );  
	$desc_single  = get_post_meta( $post->ID , 'desc_seo' , true );  
	$tags_single  = get_post_meta( $post->ID , 'tags_seo' , true );  
	$img_single   = get_post_meta( $post->ID , 'img_social' , true ); 
	if(!empty($title_single)){  
?>
<title><?php echo $title_single; ?></title>
<?php }else{ ?>
<title><?php the_title(); ?></title>
<?php } ?>
<?php if(!empty($desc_single)){ ?>
<meta name="description" itemprop="description" content="<?php echo $desc_single; ?>" />
<?php } ?>
<?php if(!empty($tags_single)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tags_single; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php if( !empty($img_single)){ ?>
<meta property="og:image" content="<?php echo $img_single; ?>" />
<?php }else{ ?>
<meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' ); ?>" />
<?php } ?>
<?php if(!empty($title_single)){ ?>
<meta property="og:title" content="<?php echo $title_single; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php the_title(); ?>" />
<?php } ?>
<?php if(!empty($desc_single)){ ?>
<meta property="og:description" content="<?php echo $desc_single; ?>"/>
<?php }else{ ?>
<?php 
	$content_single = substr( $post->post_content , 0, 156);
	$content_single = strip_tags($content_single, '')
?>
<meta property="og:description" content="<?php echo $content_single; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>

<?php }else{?>

<title><?php wp_title(); ?></title>
<meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>" />
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
<?php

}
add_action( 'wp_head', 'add_meta_tags' , 1 );
