<?php 
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
$offset =  $_POST['offset'];
         query_posts( array(
         	 'post_type'=>'service',
         	 'posts_per_page'=>4,
         	 'offset' => $offset
         	) );
                 if(have_posts()):
                      $i = 0;
                 	while(have_posts()):
                 		the_post(); ?>
                        <div class="service wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="<?=$i?>s">
                          <div class="image">
                            <?the_post_thumbnail();?>
                          </div>
                          <div class="detail">
                            <h2><?php echo the_title(); ?></h2>
                            <p><?=wp_trim_words(get_the_content(),100,' .. ')?></p>
                            <a  href="<?php the_permalink( )?>">المزيد</a>
                          </div>
                        </div>
                 		<?
                          $i = $i + 0.2;
                 	endwhile;
                 endif;
                 wp_reset_query();