<?php 
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

$sendDay = $_POST['day'];
 
?>

<div class='wrapper' id="today">
                   
                  
                        
                            <? query_posts(array('post_type'=>'matches' , 'posts_per_page' => 20)); ?>
                            <? if(have_posts()) { while(have_posts()) { the_post(); ?>
                            <? $year = get_post_meta($post->ID, 'year', true); ?>
                            <? $day = get_post_meta($post->ID, 'day', true); ?>
                            <? $month = get_post_meta($post->ID, 'month', true); ?>
                            <? $hour = get_post_meta($post->ID, 'hours', true); ?>
                            <? $mins = get_post_meta($post->ID, 'mins', true); ?>
                            <? $hour_end = get_post_meta($post->ID, 'hours_end', true); ?>
                            <? $mins_end = get_post_meta($post->ID, 'mins_end', true); ?>
                            <? $ampm = get_post_meta($post->ID, 'ampm', true); ?>
                            <? $currenttime = date('H'); ?>
                            <? if( $ampm == 'pm' ) { ?>
                                <? $hour = $hour+12; ?>
                                <? $hour_end = $hour_end+12; ?>
                                <? $type = 'مساءا'; ?>
                            <? }else if( $ampm == 'am' ) { ?>
                                <? $currenttime = date('H'); ?>
                                <? $type = 'صباحا'; ?>
                            <? } ?>
                            <? $yesterday = $sendDay; ?>
                            <? if( $day == $yesterday and $month == date('m') ) { ?>
                            <a href="<?php echo get_post_meta($post->ID,'matchLink' , 1) ?> ">
                              <div class="box">
                                 <div><?=get_post_meta($post->ID, 'logo1_txt', true)?> <img src="<?=get_post_meta($post->ID, 'logo1', true)?>" /></div>
                                <div>
                                <?php 
                                   if ($sendDay == date('d')) {
                                  if(date('H') >= $hour_end && date('i') >= $mins_end){
                                
                                         echo '<span class="finished">انتهت</span>';
                                       }else if ( date('H') >=$hour && date('i') ) {
                                           echo '<span class="now">حاليا </span>';
                                       }
                                       
                                       } else { ?>
                                
                                        <span><?=($hour > 12) ? $hour-12 : $hour?>:<?=$mins?></span>
                                        <span class="am-pm"><?=$type?></span>
                                       
                                <?php  } ?> </div>
                                
                                <div><img src="<?=get_post_meta($post->ID, 'logo2', true)?>" /> <?=get_post_meta($post->ID, 'logo2_txt', true)?> </div>
                                <div><?=get_post_meta($post->ID, 'hanging', true)?></div>
                                <div><span><?=get_post_meta($post->ID, 'league', true)?></span></div>

                               
                                
                             </div>
                             </a>
                            <? } ?>
                            <? } } ?>
                  </div>