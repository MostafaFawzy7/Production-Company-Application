<?php 
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
$catid = $_POST['cat'];
  ?>
   <div class="container">
   	<div class="grid">
  <?
          $i = 0;
            query_posts( array( 
                 'post_type' => 'post',
                  'cat' => $catid
             ) );
            if(have_posts()) {
            	while (have_posts()) {
            		the_post(); 
                require(get_template_directory().'/grid.php');

                 $i++;
            		
            	}
            }

            wp_reset_query();

            ?>

             	</div>
   </div>

              
              
                
            
         
           
           