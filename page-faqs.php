<?php  get_header() ?>
<?php  wp_reset_query(); ?>

<div class="latest-news2">
  <div class="container">
    <div class="note-head1">
      <h1 class="questions-headline"><?=YC_GetOpt('questions')?></h1>
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

    <div class="question_blocks">
      <div class="big-block zoomInRight wow getByAjax" data-wow-duration="1s">
        <?php
        query_posts( array('post_type'=>'faqs','posts_per_page'=>6) );
        if(have_posts()):
        $i = 0;
        while(have_posts()):
        the_post(); ?>
          <div class="item2">
            <ul class="tabs">
              <li class="question">
                <h2><i class="fas fa-question-circle"></i> <? the_title(); ?></h2>
                <div class="answer"><p class="content2"><? the_content(); ?></p></div>
              </li>
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

    <script type="text/javascript">
        $( ".question" ).click(function() {
          $( this ).toggleClass( "active" );
          $( this ).find('.answer').toggle(200);
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
</div>
<?php get_footer() ?>