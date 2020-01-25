<?php 
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );     
/////////////////////////////////////////  
query_posts( array('post_type'=>'post','posts_per_page'=>8,'offset'=>$_POST['offset']) );
if(have_posts()):
	 $i = 0;
	while(have_posts()):
		the_post(); ?>
		<div class="item ">
                  <a href="<?the_permalink()?>" >
                        <div class="image">
                           <? the_post_thumbnail() ?>
                        </div>
                        <h2><?the_title()?></h2>
                        <p><?=wp_trim_words(get_the_content(),30,' ... ')?></p>
                  <a class="more" href="<?the_permalink()?>">Read More</a>
            </div>
		<?
		$i = $i + 0.2;
	endwhile;
endif;
wp_reset_query();
?>
			