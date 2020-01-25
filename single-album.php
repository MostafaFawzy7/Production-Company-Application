<?php get_header();  ?>
    <div class="sliderA">
        <span class="next"><i class="fa fa-chevron-left"></i></span>
         <span class="prev"><i class="fa fa-chevron-right"></i></span>
         <div class="owl-theme owl-carousel al-slider">
             <div class="item">
                 <?the_post_thumbnail()?>
             </div>
             <?php
          $files = get_post_meta( get_the_ID(), 'album', 1 );
            foreach ( (array) $files as $attachment_id => $attachment_url ) { ?>
               <div class="item">
                <? echo wp_get_attachment_image( $attachment_id,'resize2'); ?>

               </div>
               <?
            }

          ?>
         </div>
     </div>

     <div class="activeitemSelected">
       <span>Close Window</span>
       <div></div>
     </div>

  <section class="single-album">

     <div class="container">
    

        <div class="album-detail clearfix">
          <div class="right">
               <?php if(get_post_meta($post->ID,'client_name',1)!=''):  ?>
             <ul class="info-list">
               <li>
                   <i class="fa fa-user"></i>
                   <?=get_post_meta($post->ID,'client_name',1)?>
                </li>

    
             </ul>
             <?endif;?>
            
            <div class="tabs">
    
              <?foreach(get_post_meta($post->ID,'watch',1) as $a):
              ?>
              <div class="tab-head"><i class="fa fa-plus"></i><?=$a['albumTitle']?></div>
              <div class="tab-body"><?=$a['albumDetails']?></div>
              <?
              endforeach;?>
            </div>

          </div>
          <div class="left">
              <div class="content">
                  
                <div>
                      <h2><?php the_title() ?></h2>
                        <ul>
                            <li>
                            <? foreach( get_the_terms($post->ID,'category',1)  as $cat){ 
                                 ?> 
                                 <a href="<?=get_term_link($cat)?>"><?=$cat->name.' - '; ?></a><?
                                }?>
                            </li>
                            <li>
                            <?=get_post_meta($post->ID,'album_time',1)?>
                            </li>
                        </ul>
                    <?=$post->post_content;?></div>
                    <div class="social-share">

                   <div>
                        <a class="social-facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                          Share With Facebook
                        </a>
                        
                        <a class="social-twitter" href="http://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank">
                        <i class="fab fa-twitter"></i>
                          Tweet On Twitter 
                        </a>
                        
                        <a class="social-google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
                        <i class="fab fa-google-plus-g"></i>
                          Share By Google+
                        </a>                    
                        
                        <a class="social-pinterest" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID))?>" class="pin-it-button" count-layout="horizontal" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
                        <i class="fab fa-pinterest-p"></i>
                          Share On Pinterest
                        </a>
                   </div>
                </div>
              </div>
              

          </div>
        </div>
            <?php 
            if( ! wp_is_mobile() ) {
            if( get_option( 'album_1' ) !='' ):
            echo '<center>'.get_option( 'album_1') . '</center>';
            endif;
            } else {
            if( get_option( 'album_1_mob' ) !='' ):
            echo '<center>'.get_option( 'album_1_mob') . '</center>';
            endif;
            } ?>
        <div class="allImages">
          <?php
            $files = get_post_meta( get_the_ID(), 'album', 1 );
            foreach ( (array) $files as $attachment_id => $attachment_url ) { ?>
              <div class="file-list-image">
                <img  class="hidden" src="<?=$attachment_url?>">
                <i class="fa fa-camera"></i>
               <?=wp_get_attachment_image( $attachment_id,'album'); ?>
            </div>
           <? } ?>
        </div>
                    <?php 
            if( ! wp_is_mobile() ) {
            if( get_option( 'album_2' ) !='' ):
            echo '<center>'.get_option( 'album_2') . '</center>';
            endif;
            } else {
            if( get_option( 'album_2_mob' ) !='' ):
            echo '<center>'.get_option( 'album_2_mob') . '</center>';
            endif;
            } ?>


     </div>
  </section>
  <div class="related">
  	<div class="container">
  	  	  <h2> <i class="fa fa-camera"></i> Related Albums</h2>
	   	  <div class="related-albums">
	      <?
	        query_posts(array(
	           'post_type'=>'album',
	            'post__not_in' => array($post->ID)
	         ));
	        if(have_posts()):
	          while(have_posts()):
	            the_post(); 
	            ?>
	              <a href="<?the_permalink()?>">
	                <?the_post_thumbnail('thumbnail')?>
	                <span> <i class="fa fa-link"></i></span>
	                  <h3><?the_title()?></h3>
	              </a>
	            <?
	          endwhile;
	        endif;
	        wp_reset_query();
	       ?>
	   </div>
	</div>
  </div>

   <div id="albumShow">
    <span>Close Window</span>
    <div></div>
   </div>
<?php get_footer();  ?>