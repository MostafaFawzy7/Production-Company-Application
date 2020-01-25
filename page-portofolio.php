<? get_header(); ?>
 <? wp_reset_query(); ?>
   <section class="MainContent padding">
     <div class="back"></div>
     <div class="container">
      <div class="heads">
          <ul class="ShuffleFilter">
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
   
<?php get_footer(); ?>