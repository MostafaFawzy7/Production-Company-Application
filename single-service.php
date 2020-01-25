<?php get_header()  ?>
 <section class="single-service">
 	<div class="container">
 		<div class="right">
 			<h2><?the_title()?></h2>
 			 <div class="image">
 			 	<?the_post_thumbnail()?>
 			 </div>
 			 <div class="dtl">
 			 	<?=$post->post_content?>
 			 </div>
 		</div>
 	</div>
     <!-- single ads  -->
    <?php 
    if( ! wp_is_mobile() ) {
    if( get_option( 'service_1' ) !='' ):
    echo '<center>'.get_option( 'service_1') . '</center>';
    endif;
    } else {
    if( get_option( 'service_1_mob' ) !='' ):
    echo '<center>'.get_option( 'service_1_mob') . '</center>';
    endif;
    } ?>
  <div class="left">
    <h2><i class="fa fa-cog"></i> خدمات ذات صلة </h2>
      <ul>
        <?php 
         query_posts( array('post_type'=>'service') );
           if(have_posts()):
            while(have_posts()):
              the_post();
               ?>
              <li>
                 <a href="<?the_permalink()?>">
                   <div class="top"></div>
                   <div class="right"></div>
                   <div class="bottom"></div>
                   <div class="left"></div>
                   <?the_post_thumbnail()?>
                   <span><i class="fa fa-search"></i></span>
                   <h3><?the_title()?></h3>
                 </a>
              </li>
               <?
            endwhile;
           endif;
         ?>
       </ul>
    </div>
 </section>
<?php get_footer() ?>