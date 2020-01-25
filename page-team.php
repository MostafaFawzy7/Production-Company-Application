<?php  get_header() ?>
<?php wp_reset_query();  ?>

       <section class="teamWork2">
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

<?php get_footer();  ?>