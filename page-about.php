<?php get_header()  ?>
<?php wp_reset_query();  ?>
  
  <section class="about">
  	 	 <div class="row">
  	 	 	<div class="right">
  	 	 		<div>
            <h2>Our Word</h2>
  	 	 			<? the_content() ?>
  	 	 		</div>
  	 	 	</div>
  	 	 	<section class="teamWork">
         <div class="container">
           <h2>Teamwork</h2>
          <div class="teamCont">
                <?
                 query_posts( array('post_type'=>'teamwork','posts_per_page'=>10) );
                 if(have_posts()):
                  $i = 0;
                  while(have_posts()):
                    the_post(); ?>
                     <div class="team fadeInUp wow" data-wow-duration="1s" data-wow-delay="<?=$i?>s">
                     <div class="teamMember"> 
                       <div class="image">
                         <img src="<?php echo get_post_meta($post->ID,'client_image',1)   ?>"> 
                       </div>
                       <div class="detail">
                          <span class="name">
                            <?=get_post_meta($post->ID,'teamName',1)?>
                          </span>
                          <span class="job">
                             <?=get_post_meta($post->ID,'job',1)?>
                          </span>
                       </div>
                      </div>
                     </div>
                    <?
                    $i = $i + 0.2;
                  endwhile;
                 endif;
                 wp_reset_query();
                ?>
              
            </div>
         </div>
       </section> 
        <section class="testimonials">
        <div class="container">
           <h2>Testimonials</h2>
          <div class="teamContent owl-carousel owl-theme">
        <?
        $args = array ( 'post_type'=> 'client','posts_per_page'=>6);
        query_posts( $args );
        if(have_posts()) { while(have_posts()) { the_post();
        ?>
         <div class="ClientContent" data-wow-duration="1s" data-wow-delay="<?=$i?>s">
           <a>
             <span class="client-title">
                  <?the_title()?>
             </span>
             <div class="detail2">
               <p><?=wp_trim_words(get_the_content(),40,'...')?></p>
                <span class="name">
                  <?=get_post_meta($post->ID,'clientName',1)?>
                </span>
                <span class="job">
                   <?=get_post_meta($post->ID,'clientJob',1)?>
                </span>
             </div>
           </a>
         </div>
        <?
        } }
        wp_reset_query();
        ?>
      </div>
        </div>
      </section> 


  	 	 </div>
  	 
  </section>
  <section class="partener">
  <div class="container">
    <?php  
        query_posts( array('post_type'=>'partener','posts_per_page'=>6) );
        if(have_posts()):
          while(have_posts()):
            the_post(); ?>
             <div>
               <?the_post_thumbnail()?>
               <span><?the_title()?></span>
             </div>
            <?
          endwhile;
        endif;
        wp_reset_query();
     ?>
  </div>
</section>
<?php get_footer()  ?>