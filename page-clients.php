<?php  get_header() ?>
<?php  wp_reset_query(); ?>

	<section class="testimonials2">
		<div class="container">
		    <h2 class="reviews">Testimonials</h2>
		    <div class="teamContent2">
				<?
				$args = array ( 'post_type'=> 'client','posts_per_page'=>-1);
				query_posts( $args );
				if(have_posts()) { while(have_posts()) { the_post();
				?>
				 <div class="ClientContent2" data-wow-duration="1s" data-wow-delay="<?=$i?>s">
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

<?php get_footer() ?>