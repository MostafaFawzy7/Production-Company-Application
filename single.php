<?
if( $_POST['sendcomment'] ) { ?>
<?
if( is_user_logged_in() ) {
global $current_user;
$data = array(
'comment_post_ID' => $post->ID,
'comment_author' => $current_user->user_login,
'comment_author_email' => $current_user->user_email,
'comment_content' => $_POST['comment'],
'user_id' => $current_user->ID,
'comment_date' => $time,
'comment_approved' => 1,
);
}else {
$current_user = get_userdata(10);
$data = array(
'comment_post_ID' => $post->ID,
'comment_author' => $current_user->user_login,
'comment_author_email' => $current_user->user_email,
'comment_content' => $_POST['comment'],
'user_id' => $current_user->ID,
'comment_date' => $time,
'comment_approved' => 1,
);
}
wp_insert_comment($data);
?>
<? header('Location: '.get_the_permalink().''); ?>
<? } ?>
<?php get_header(); ?>
<? wpb_set_post_views(get_the_ID()); ?>
<? wp_reset_query(); ?>
  <section class="single">
    <div class="container">
      <div class="right">   
          <h1 class="titleNews"><a href="<?the_permalink(get_the_ID())?>"><?php the_title() ?></a></h1>
           <!-- 
            ===================
            ==== post info 
            ====================
           -->
           <div class="informat">
           		<div class="social-shares">
                            <ul>
                                <li class="social-facebook">
                                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                
                                <li class="social-twitter">
                                    <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                
                                <li class="social-google">		
                                    <a href="https://plus.google.com/share?url=<? the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>					
                                </li>
                                
                                <li class="social-whatsapp">
                                    <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?>>
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                
                                <div class="clr"></div>
                            </ul>
                        </div>

                  <div class="timeInfoDiv">
                  		<span class="timeInfoicon"><?=YC_GetOpt('timeicon')?></span>
                  		<span class="timeInfo"><?=YC_GetOpt('timenews')?></span>
                  </div>
                  
           </div>
           
          <div class="back">
          	 <img src="<?php the_post_thumbnail_url(  ) ?>">
          	 <span class="image-title"><?=YC_GetOpt('image-news-title')?></span>
          </div>

          <span class="publisher"><?=YC_GetOpt('publish')?></span>  
             <?if(!empty(get_post_meta($post->ID, 'album', true) )) { ?>
               <div class="albumSlider">
                  <span class="next"><i class="fa fa-chevron-left"></i></span>
                  <span class="prev"><i class="fa fa-chevron-right"></i></span>
                  <div class="owl-carousel owl-theme">
                  <? foreach (get_post_meta($post->ID, 'album', true) as $image) { ?>
                    <div class="item">
                        <img title='<? the_title(); ?>'
                        alt='<? the_title(); ?>'
                        src="<?=$image?>" />
                    </div>
                  <? } ?>
                  </div>
               </div>
             <? } ?>
          <div class="content">
              <?php 
                if( ! wp_is_mobile() ) {
                   if( get_option( 'SinglePages_1' ) !='' ):
                      echo '<center>'.get_option( 'SinglePages_1') . '</center>';
                    endif;
               } else {
                  if( get_option( 'SinglePages_1_mob' ) !='' ):
                     echo '<center>'.get_option( 'SinglePages_1_mob') . '</center>';
                    endif;
             } ?>

            <?php the_content( ) ?>
              <!-- 
               =============
                embed videos
                ==============
               -->
                <?php 
                if( ! wp_is_mobile() ) {
                if( get_option( 'SinglePages_4' ) !='' ):
                echo '<center>'.get_option( 'SinglePages_4') . '</center>';
                endif;
                } else {
                if( get_option( 'SinglePages_4_mob' ) !='' ):
                echo '<center>'.get_option( 'SinglePages_4_mob') . '</center>';
                endif;
                } ?>
               <?php 
                   if(get_post_meta($post->ID, 'embedCode', true)!='') { 
                 ?>
               <div class="videoEmbed">
                <?=get_post_meta($post->ID, 'embedCode', true)?>
              </div>
              <? } ?>
          </div>
            <div class="keywords">
              <h3>Related Words</h3>
               <?php 
                foreach(get_the_terms($post->ID,'category',1) as $cat) {
                 ?> <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a> <?
                }
                foreach(get_the_terms($post->ID,'post_tag',1) as $word): 
                  ?> <a href="<?=get_term_link($word)?>"><?=$word->name?></a> <?
                 endforeach; ?>
            </div>

            <!--  
               =============
                Author details
                ==============
               -->
            <?php 
            if( ! wp_is_mobile() ) {
            if( get_option( 'SinglePages_5' ) !='' ):
            echo '<center>'.get_option( 'SinglePages_5') . '</center>';
            endif;
            } else {
            if( get_option( 'SinglePages_5_mob' ) !='' ):
            echo '<center>'.get_option( 'SinglePages_5_mob') . '</center>';
            endif;
            } ?>
              <!--  
               =============
                comments
                ==============
               -->             
              <h3 id="commentToggle"><i class="fa fa-plus"></i>Show / Hide Comments</h3>
                <div id="disqus_thread"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://http-elboshy-com-engineer.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>             
           </div>
          <div class="left">
             <div class="facPage">
             <div class="fb-page"
                  data-href="<?php echo get_option('facePage'); ?>"
                  data-width="340"
                  data-hide-cover="false"
                  data-show-facepile="true"></div>
            </div>
      
          <?php 
              foreach (array_slice(get_the_terms($post->ID,'category' , 1),0,1) as $cat) {
                $catid = $cat->term_id;
                $catname = $cat->name; 
              }
            ?>
           <h3> <i class="fa fa-cog"></i> News From <?php echo $catname ?></h3> 
           <ul class="sideList">
             <?php 
                 query_posts(array(
                     'post_type'=>'post', 
                      'orderby' => 'rand',
                     'cat'=>$catid,
                      'posts_per_page'=>5
                      )); ?>
                <?php 
                   if(have_posts()) {
                      while(have_posts()) {
                         the_post(); ?>
                        <li >
                            <a href="<? the_permalink(); ?>">
                               <div class="image">
                                 <img src=" <?php the_post_thumbnail_url() ?>" alt="<?the_title()?>" title="<?the_title()?>">
                               </div>
                               <h2><? the_title(); ?></h2>
                                <span class="views">
                                 <i class="fa fa-eye"></i> 
                                  <?=(get_post_meta($post->ID,'viewss',1) == '' ? 0 : get_post_meta($post->ID,'viewss',1))?>
                                 </span>
                                 <span class="cats">
                                  <i class="fa fa-cogs"></i>
                                 <?php foreach( array_slice(get_the_terms($post->ID,'category',1),0,1) as $cat) {
                                   echo $cat->name;
                                 } ?>
                                   
                                 </span>
                                  
                              </a>
                        </li> 
                <? } } wp_reset_query(); ?>
          </ul>
            <?php 
            if( get_option( 'SinglePages_2' ) !='' ):
              echo '<center>'.get_option( 'SinglePages_2') . '</center>';
            endif;
              ?>
          <h3><i class="fa fa-cog"></i>Choosen Articles</h3>
            <ul class="sideList">
             <?php 
                 query_posts(array(
                     'post_type'=>'post', 
                      'orderby' => 'rand',
                      'posts_per_page'=>5
                      )); ?>
                <?php 
                   if(have_posts()) {
                      while(have_posts()) {
                         the_post(); ?>
                        <li >
                            <a href="<? the_permalink(); ?>">
                               <div class="image">
                                 <img src=" <?php the_post_thumbnail_url() ?>" alt="<?the_title()?>" title="<?the_title()?>">
                               </div>
                               <h2><? the_title(); ?></h2>
                                <span class="views">
                                 <i class="fa fa-eye"></i> 
                                  <?=(get_post_meta($post->ID,'viewss',1) == '' ? 0 : get_post_meta($post->ID,'viewss',1))?>
                                 </span>
                                 <span class="cats">
                                  <i class="fa fa-cogs"></i>
                                 <?php foreach( array_slice(get_the_terms($post->ID,'category',1),0,1) as $cat) {
                                   echo $cat->name;
                                 } ?>
                                   
                                 </span>
                                  
                              </a>
                        </li> 
                <? } } wp_reset_query(); ?>
          </ul>

      </div>
    </div>
  </section>
  
<?php get_footer(); ?>
