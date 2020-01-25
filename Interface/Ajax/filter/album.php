<?php 
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
$offset =  $_POST['offset'];
         query_posts( array(
         	 'post_type'=>'album',
         	 'posts_per_page'=>4,
         	 'offset' => $offset
         	) );
                 if(have_posts()):
                  $i = 0;
                 	while(have_posts()):
                 		the_post(); ?>
                          <div class="col wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="<?=$i?>s">
                          	 <div class="image">
                          	 	<div><?php the_post_thumbnail() ?></div>
                          	 </div>
                          	 <div class="detail">
                          	 	<h2><?the_title()?></h2>
                          	 	 <p><?=wp_trim_words(get_the_content(),100,' .. ')?></p>
                          	 	 <a href="<?the_permalink()?>">مشاهدة الالبوم</a>
                          	 </div>
                          </div>
                 		<?
                    $i = $i + 0.2;
                 	endwhile;
                 endif;
                 wp_reset_query();