<?php  get_header() ?>
   <section class="single-teamwork">
    <div class="cover" style="background-image: url(<?the_post_thumbnail_url()?>)">
      <div class="profile">
        <img src="<?php echo get_post_meta($post->ID,'client_image',1)   ?>"> 
      </div>
      <h2><?=get_post_meta($post->ID,'teamName',1)?></h2>
    </div>
   	 <div class="container">
           <div class="rightInfon">
              <div class="moreDetails clearfix">
                <div class="boxRight">
                   <ul>
                     <?php  foreach(get_post_meta($post->ID,'teamData',1) as $a ): 
                        echo '<li>';
                        echo '<i class="fa fa-info"></i><span>'.$a['albumTitle'].' :</span> ';
                        echo '<p>'.$a['albumDetails'].'</p>';
                        echo '</li>';
                      endforeach; ?>
                   </ul>
                </div>
                <div class="boxLeft">
                   <div><? echo $post->post_content; ?></div>
                </div>
              </div>

           </div>

   	 </div>
    <div class="leftInfo">
   <div class="allTeams">
     <h2><i class="fa fa-user"></i>اعضاء اخرين  </h2>
    <?php  
     query_posts( array('post_type'=>'teamwork','post_not_in'=>array($post->ID)) );
     if(have_posts()):
      $i = 0;
      while(have_posts()):
        the_post(); ?>
        <div class="team wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="<?=$i?>s">
            <a href="<?php the_permalink() ?>" >
          <div class="image">
            <img src="<?php echo get_post_meta($post->ID,'client_image',1)  ?>">
            <?php if(!wp_is_mobile()): ?>
               <span><i class="fa fa-link"></i></span>
             <?php endif; ?>
          </div>
          <div class="details">
            <h2><? echo get_post_meta($post->ID,'teamName',1) ?></h2>
            <p><? echo get_post_meta($post->ID,'job',1) ?></p>
          </div>
            </a>
            <ul class="team-social">
              <a target="_blank"  href="<?=get_post_meta( $post->ID,'facebook',1)?>"><i class="fa fa-facebook"></i></a>
              <a target="_blank"  href="<?=get_post_meta( $post->ID,'twitter',1)?>"><i class="fa fa-twitter"></i></a>               
              <a target="_blank"  href="<?=get_post_meta( $post->ID,'youtube',1)?>"><i class="fa fa-youtube"></i></a>               
              <a target="_blank"  href="<?=get_post_meta( $post->ID,'google',1)?>"><i class="fa fa-google-plus"></i></a>
            </ul>
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

<?php  get_footer() ?>