<!DOCTYPE PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html <?php language_attributes(); ?>>
<? require(ThemeURI.'/Interface/Header/head.php'); ?>
 <body>
<div style="overflow-x:hidden">
  <!--- Header -->
  <!-- logo and main menu  -->

  <nav class="<?if(!is_home()){echo 'fixed backColor';}?>">
    <div class="container">
       
          <a class="icons" href="javascript:void(0);">
            <i class="fas fa-search"></i>
          </a>
          <div id="search-box">
            <form action="<?php echo home_url(); ?>">
              <input type="text" name="s" id="s" placeholder="Search ....">
              <button type="submit"> <i class="fa fa-search"></i>
              </button>
            </form>
          </div>

          <div class="logo">
            <h1>
               <?php  if(get_option('logo') !='') {
                    ?>
                        <a href="<?=home_url()?>">
                         <img src="<?=get_option('logoLight')?>" title="<?=get_option('LogoTxT')?>">
                         <img src="<?=get_option('logoDark')?>" style="display: none;" title="<?=get_option('LogoTxT')?>">
                        </a>
                    <?
                  } else { ?>
              <a href="<?=home_url()?>">
                   <? $arr = str_split(get_option('LogoTxT')); 
                   foreach($arr as $a) {
                      echo '<span>'.$a.'</span>';
                   }
                 ?>
                 <? } ?>
                
              </a>
            </h1>
          </div>
       
          <div class="menu">
              <? if(wp_is_mobile()) { ?>
              <span class="bars">
                  <i class="fa fa-bars"></i>
              </span>
              <? } ?>
              
              <div>
                  <?php
                      wp_nav_menu ( array(  
                      'theme_location'  => (wp_is_mobile()) ? 'mobile-menu' : 'main-menu',  
                      'menu_class'      => '',  
                      'echo'            => true,  
                      'fallback_cb'     => 'wp_page_menu',  
                      'before'          => '',  
                      'after'           => '',  
                      'link_before'     => '',  
                      'link_after'      => '',  
                      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                      'depth'           => 0,  
                      'walker'          => '' 
                      ) );  
                  ?>
              </div>
          </div>
          <?php if(!is_home()){ ?>

           <? }  ?>
    </div>
    <div class="hidden-list">

      <div>
          <?php
              wp_nav_menu ( array(  
              'theme_location'  => (wp_is_mobile()) ? 'mobile-menu' : 'main-menu',  
              'menu_class'      => '',  
              'echo'            => true,  
              'fallback_cb'     => 'wp_page_menu',  
              'before'          => '',  
              'after'           => '',  
              'link_before'     => '',  
              'link_after'      => '',  
              'items_wrap'      => '<ul id="%1$s" class="%2$s hidden-ul">%3$s</ul>',  
              'depth'           => 0,  
              'walker'          => '' 
              ) );  
          ?>
      </div>
    </div>
  </nav>


<? if( is_home() ) { ?>
<script type="text/javascript">
var navH = $('nav');
$(window).on('scroll',function(){
	if($(this).scrollTop()>40){
	   navH.addClass('fixed');
	}
	if($(this).scrollTop()<40) {
	  navH.removeClass('fixed');
	}
	if($(this).scrollTop() > 170) {
	   navH.addClass('backColor');
	}
	    if($(this).scrollTop() < 170) {
	  navH.removeClass('backColor');
	}
});
</script>
<? } ?>

<? if(wp_is_mobile()) { ?>
<script type="text/javascript">
var navH = $('nav');
$(window).on('scroll',function(){
  if($(this).scrollTop()>40){
     navH.addClass('fixed');
  }
  if($(this).scrollTop()<40) {
    navH.removeClass('fixed');
  }
  if($(this).scrollTop() > 0) {
     navH.addClass('backColor');
  }
      if($(this).scrollTop() < 0) {
    navH.removeClass('backColor');
  }
});
</script>
<? } ?>

<?php if(is_home()){ ?>

   <div class="slider">
        <span class="next"><i class="fa fa-chevron-right"></i></span>
         <span class="prev"><i class="fa fa-chevron-left"></i></span>
     <div class="mySlider owl-carousel owl-theme">
        <?php 
         query_posts( array('post_type'=>'slider','posts_per_page'=>10) );
         if(have_posts()):
          while(have_posts()):
            the_post();
             ?>
              <div class="item">
                 <div class="container">
                   <div class="image"><? the_post_thumbnail(); ?></div>

                    <h2><?php the_title() ?></h2>
                    <p><?=wp_trim_words(get_the_content(),50,' .. ');?></p>
                    <div class="links">
                     <?php if (get_post_meta($post->ID,'slider_url_2',1) != '' ) { ?>
                        <a class="url" href="<?php echo get_post_meta($post->ID,'slider_url_1',1)?>">
                            <?=get_post_meta($post->ID,'slider_url_1_name',1)?>
                        </a>
                         <a class="url" href="<?php echo get_post_meta($post->ID,'slider_url_2',1)?>">
                          <?=get_post_meta($post->ID,'slider_url_2_name',1)?>
                         </a>
                        <? } else {  ?>
                          <a href="<?php echo get_post_meta($post->ID,'slider_url_1',1)?>">
                             <?=get_post_meta($post->ID,'slider_url_1_name',1)?>
                          </a>

                       <?} ?>
                    </div>
                 </div>
              </div>
             <?
          endwhile;
         endif;
         wp_reset_query();
          ?>
     </div>
   </div>

<?php } ?>












