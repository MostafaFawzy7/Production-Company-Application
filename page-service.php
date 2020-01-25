<?php  get_header() ?>
<? wp_reset_query(); ?>
<div class="page-service">
	<div class="container">
    <h2><i class="fa fa-cog"></i>جميع خدماتنا</h2>
      	<div class="left">
      		<div>
      		<?php query_posts( array('post_type'=>'service','posts_per_page'=>4) );
                   if(have_posts()){
                    $i = 0;
                   	while (have_posts()) {
                   		the_post();
                   		?>
                        <div class="service wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="<?=$i?>s">
                        	<div class="image">
                        		<?the_post_thumbnail();?>
                        	</div>
                        	<div class="detail">
                        		<h2><?php echo the_title(); ?></h2>
                        		<p><?=wp_trim_words(get_the_content(),100,' .. ')?></p>
                        		<a  href="<?php the_permalink( )?>">المزيد</a>
                        	</div>
                        </div>
                   		<?
                      $i = $i + 0.2;
                   	}
                   }
                   wp_reset_query();
      		  ?>
      		  </div>
      	</div>
         <div class="row moreService"></div>
         <div class="spinners"></div>
         <span id="loadMore1"><i class="fa fa-link"></i> تحميل المزيد </span>
         <script type="text/javascript">
              var offset = 0;
            $('#loadMore1').click(function(){
                  offset = offset + 4;
                  var More = $('.page-service .left >div'),
                      that = $(this);
                  $('.spinners').html('<span class="wait">لحظة   ....  </span>');
                  $.ajax({
                        type:'POST',
                        url :'<?=get_template_directory_uri()?>/Interface/Ajax/filter/service.php',
                        data:{offset:offset},
                        success:function(data){
                              if(data == '') {
                                    $('.spinners').html('<span class="noResult">لا يوجد نتائج اخري </span>');
                                    that.hide();
                              }else {
                                    $('.spinners').hide();
                                    More.append(data);
                              }                             
                        }
                  });
            });
         </script>

	</div>
</div>

<?php  get_footer() ?>