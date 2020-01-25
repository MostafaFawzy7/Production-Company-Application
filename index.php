<?php get_header(); ?>

  <!--
    =============
     Services
    ============== 
  -->
   <section class="services">
       <div class="container">
         <h2>Our Services</h2>
          <div class="all-services">
          	<div class="container2">
	             <?php 
	             query_posts( array('post_type'=>'service', 'posts_per_page'=>6) );
	             if(have_posts()):
	              $i=0;
	              while(have_posts()) :

	                the_post(); ?>
		                 <div class="service wow fadeInUp" data-wow-duration="1s" data-wow-delay='<?=$i?>s'>
		                  <a>
		                      <div class="icon">
		                         <?=get_post_meta($post->ID,'icon',1);?>
		                      </div>
		                      <div class="detail">
		                        <h3><?the_title()?></h3>
		                        <p><?=wp_trim_words(get_the_content(),12,'  ')?></p>
		                      </div>
		                    </a>
		                 </div>
	                <?
	                 $i = $i + 0.2;
	              endwhile;	
	             endif; 
	             ?>
             </div>
             <div class="aboutus">
             	<p class="word"><?=YC_GetOpt('HomeTitle')?></p>
             	<h1 class="ourServis"><?=YC_GetOpt('HomeTitleDescripe')?></h1>
             	<h5 class="descripe"><?=YC_GetOpt('HomeContent')?></h5>
             	<a href="<?=YC_GetOpt('Homelink')?>" class="apply">Submit</a>
             </div>
          </div>
       </div> 
   </section>

 <!--
   ===========================
   === Main news
   =========================== 
  -->

   <section class="MainContent">
     <div class="back"></div>
     <div class="container">
     	<div class="heads">
	        <ul class="ShuffleFilter difColor">
	          <li data-name="all" class="active">All</li>
	           <?
	           foreach(get_categories( array('taxonomy'=>'category','hide_empty'=>0) ) as $cat):
	              ?> <li data-name="<?=$cat->name?>">
	                <?=$cat->name?></li> <?
	           endforeach;
	           ?>
	        </ul>
	        <div class="albums"><?=YC_GetOpt('albumTitle')?></div>
        </div>
      	<div class="row my-shuffle-container">

          <?php 
             query_posts( array('post_type' => 'album') );
             if(have_posts()):
              while(have_posts()):
                the_post(); ?>
                  <?foreach(array_slice(get_the_terms($post->ID,'category',1),0,1) as $cat):
                   $name = $cat->name; 
                   endforeach;?>
                <figure class="col-4@sm picture-item" data-groups='<?=$name;?>'>
                  <a href="<?the_permalink()?>">
                  <div class="aspect aspect--16x9">
                    <div class="aspect__inner">
                       <?the_post_thumbnail()  ?>
                    </div>
                  </div>
                  <div class="title"><?=YC_GetOpt('albumDefinition')?></div>
                  <div class="description">
                    <figcaption><?the_title();?></figcaption>
                    <p class="date"><?=YC_GetOpt('Homedate')?></p>
                  </div>
                  
                  <span class="category">
                    <?=$name;?>
                  </span>
                  
                </a>
              </figure>
                <?
              endwhile;
             endif;
             wp_reset_query();
            ?>


        <div class="col-1@sm my-sizer-element"></div>
       </div>
     </div>
   </section>

   <!--
      =============
       latest News
      ============== 
    -->

     <section class="latest-news">
       <div class="container">
         <h2>Latest News</h2>
         <h1 class="news-title"><?=YC_GetOpt('news-Title')?></h1>
      	 <p class="read"><?=YC_GetOpt('read-News')?></p>
         <div class="news_blocks">
            <div class="big-block zoomInRight wow" data-wow-duration="1s">
                <? query_posts( array('post_type'=>'post','posts_per_page'=>6) );
                 if(have_posts()):
                  while(have_posts()):
                  	the_post(); ?>
                     
                    <div class="item ">
                      	<a href="<?the_permalink()?>" >
	                        <div class="image">
	                           <? the_post_thumbnail() ?>
	                        </div>
                          <div class="content">
                            <h2><?the_title()?></h2>
                            <p><?=wp_trim_words(get_the_content(),30,' ... ')?></p>
                          </div>
	                        
                        <a class="more" href="<?the_permalink()?>">Read More</a>
                    </div>
                    <?
                  endwhile;
                 endif;
                ?>
           </div>
         </div>
       </div>
     </section>
   
     
     

     <!--  
          team work
      -->
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
				        <div class="name">
				          <?=get_post_meta($post->ID,'clientName',1)?>
				        </div>
				        <div class="job">
				           <?=get_post_meta($post->ID,'clientJob',1)?>
				        </div>
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
       <!--
      =============
       clients
      ============== 
    -->
    <section class="clients">
      <div class="container">
        <div class="clientSlider">
        
           <div class="item">
              <div>
                <div class="opinion">
                  	<p class="approval"><?=YC_GetOpt('HomeApproval')?></p>
                  	<h1 class="customer"><?=YC_GetOpt('HomeCustomer')?></h1>
                  	<p class="explaining"><?=YC_GetOpt('HomeExplain')?></p>
                </div>
                <div class="rate-content">
                  <div class="percent" data-id="test1"></div>
                  <svg class="svg" data-id="test1" data-counter="true" data-num="<?=YC_GetOpt('percent1')?>"></svg>
                </div>
              </div>
           </div>

            <div class="item">
              <div>
                <div class="opinion">
                  	<p class="approval"><?=YC_GetOpt('HomeApproval')?></p>
                  	<h1 class="customer"><?=YC_GetOpt('HomeCustomer')?></h1>
                  	<p class="explaining"><?=YC_GetOpt('HomeExplain')?></p>
                </div>
                <div class="rate-content">
                  <div class="percent" data-id="test2"></div>
                  <svg class="svg" data-id="test2" data-counter="true" data-num="<?=YC_GetOpt('percent2')?>"></svg>
                </div>
              </div>
           </div>
            
            <div class="item">
              <div>
                <div class="opinion">
                  	<p class="approval"><?=YC_GetOpt('HomeApproval')?></p>
                  	<h1 class="customer"><?=YC_GetOpt('HomeCustomer')?></h1>
                  	<p class="explaining"><?=YC_GetOpt('HomeExplain')?></p>
                </div>
                <div class="rate-content">
                  <div class="percent" data-id="test3"></div>
                  <svg class="svg" data-id="test3" data-counter="true" data-num="<?=YC_GetOpt('percent3')?>"></svg>
                </div>
              </div>
            </div>
            
        </div>
      </div>
    </section>
          
    <!--
      =========
       clients
      ========= 
    -->


	<!--
      =================
       Contact With Us
      ================= 
    -->

    <section class="contactWithUs">
    	<div class="container">
    		<div class="rightSide">
    			<p class="headline"><?=YC_GetOpt('contactHeadline')?></p>
    			<h1 class="line"><?=YC_GetOpt('contactLine')?></h1>
    			<p class="contactParagraph"><?=YC_GetOpt('contactExplain')?></p>
    			<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
	    			<? if( isset($_POST['username']) ) { ?>
	    				<?php
						// the message
						$msg = $_POST['subject'];

						// use wordwrap() if lines are longer than 70 characters
						$msg = wordwrap($msg,70);

						// send email
						mail(get_option('admin_email'),"رسالة من".$_POST['username'],$msg);
						?>
						<div class="alert alert-success">Your Messege Sent And We Will Reply After 24 Hours</div>
	    			<? } ?>
					<div class="row">
						<div class="wgl_col-12">
							<span class="wpcf7-form-control-wrap text-759">
								<input type="text" name="username" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Name*">
							</span>
						</div>
						<div class="wgl_col-12">
							<span class="wpcf7-form-control-wrap email-613">
								<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="E-mail*">
							</span>
						</div>
						<div class="wgl_col-12">
							<span class="wpcf7-form-control-wrap textarea-497">
								<textarea name="subject" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message ..."></textarea>
							</span>
						</div>
					</div>
					<p>
						<input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit">
						<span class="ajax-loader"></span>
					</p>
					<div class="wpcf7-response-output wpcf7-display-none"></div>
				</form>
    		</div>
    		<div class="leftSide">
    			<img src="<?php echo YC_GetOpt('leftSideImg')?>">
    		</div>
    	</div>
    </section>

    <script type="text/javascript">
        $(function(){
			$('.wpcf7-form input, .wpcf7-form textarea').each(function(els, el){
				$(el).focus(function(){
				    $(this).attr('data-placeholder', $(this).attr('placeholder'));
				    $(this).removeAttr('placeholder');
				});
				$(el).focusout(function(){
				    $(this).attr('placeholder', $(this).attr('data-placeholder'));
				    $(this).removeAttr('data-placeholder');
				});
			});
        })
    </script>
    <!--
      ================
       Contact With Us
      ================ 
    -->

    <!--
      ==========
       Partners
      ========== 
    -->


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
    <script type="text/javascript">
		function run(el) {
		  $('.svg').each(function(els, el){
		    var percent = $(el).data('num') / 100;
		    var canvasSize = 170,
		      centre = canvasSize / 2,
		      radius = canvasSize * 0.8 / 2,
		      s = Snap(el),
		      path = "",
		      arc = s.path(path),
		      startY = centre - radius,
		      dontRun = false;
		    var endpoint = percent * 360;
		    if(endpoint == 360) {
		    endpoint = 359.9;
		    }
		    // Fire snap event
		    // 2 second animation
		    Snap.animate(0, endpoint, function(val) {
		    arc.remove();
		      var d = val,
		        dr = d - 90;
		        radians = Math.PI * (dr) / 180,
		        endx = centre - radius * Math.cos(radians),
		        endy = centre + radius * Math.sin(radians),
		        largeArc = d > 180 ? 1 : 0;
		          path = "M" + centre + "," + startY + " A" + radius + "," + radius + " 0 " + largeArc + ",0 " + endx + ","   + endy;
		        

		        arc = s.path(path);
		        arc.attr({
		          stroke: 'rgb(131, 169, 255)',
		          fill: 'none',
		          strokeWidth: 6
		        });
		        $('.percent[data-id="'+$(el).attr('data-id')+'"]').text(Math.round(val / 360 * 100) + '%');


		    }, 2000, mina.easeinout);
		  });
		}
		$(window).scroll(function(){
		  if( $(window).scrollTop() >= $('.clients').offset().top - 500  ){
		    run();
		    $(window).unbind('scroll');
		  }
		});
	</script>
<?php  get_footer(); ?>

