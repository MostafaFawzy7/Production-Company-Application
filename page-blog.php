<?php  get_header() ?>
<?php  wp_reset_query(); ?>
<div class="latest-news2">
	<div class="container">
			<div class="note-head">
				<h1 class="note-title"><?=YC_GetOpt('note-Title')?></h1>
	      		<p class="read-note"><?=YC_GetOpt('note-News')?></p>
	      	</div>

	    <?php 
			if( ! wp_is_mobile() ) {
			if( get_option( 'blog_1' ) !='' ):
			echo '<center>'.get_option( 'blog_1') . '</center>';
			endif;
			} else {
			if( get_option( 'blog_1_mob' ) !='' ):
			echo '<center>'.get_option( 'blog_1_mob') . '</center>';
			endif;
		} ?>

		<div class="news_blocks">
			<div class="big-block zoomInRight wow getByAjax" data-wow-duration="1s">
				<?php
	            query_posts( array('post_type'=>'post','posts_per_page'=>12) );
	            if(have_posts()):
	            	 $i = 0;
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
		                    </a>
	                        <a class="more" href="<?the_permalink()?>">Read More</a>
	                    </div>
	            		<?
	            		$i = $i + 0.2;
	            	endwhile;
	            endif;
	            wp_reset_query();
				?>
			</div>
		</div>
		<div class="spinners"></div>
		<span id="getMore">
			<i class="fa fa-link"></i> More Articles
		</span>
	</div>
	<script type="text/javascript">
		var offset = 0;
		$('#getMore').click(function(){
			offset +=8;
			var that = $(this),
			     getByAjax = $('.getByAjax');
			 $('.spinners').html('<span class="wait"> Moment .... </span>');
			$.ajax({
				url:'<?=get_template_directory_uri()?>/Interface/Ajax/filter/blog.php',
				type:'POST',
				data:{offset:offset},
				success:function(msg){
					if(msg == '') {
                      that.hide();
                      $('.spinners').html('<span class="noResult">No Result</span>');
					}else {
						$('.spinners').hide();
						getByAjax.append(msg);
					}
					

				}
			});
		});
	</script>

    <?php 
		if( ! wp_is_mobile() ) {
		if( get_option( 'blog_2' ) !='' ):
		echo '<center>'.get_option( 'blog_2') . '</center>';
		endif;
		} else {
		if( get_option( 'blog_2_mob' ) !='' ):
		echo '<center>'.get_option( 'blog_2_mob') . '</center>';
		endif;
	} ?>

</div>

<?php get_footer() ?>