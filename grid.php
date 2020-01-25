               <div class="grid-item wow fadeInUp " data-wow-duration="1s" data-wow-delay='.<?php echo $i?>s'>
                 <a href="<?php the_permalink() ?>">
                   <div class="image">
                    <span>
                      <i class="fa fa-link"></i>
                    </span>
                     <img src=" <?php the_post_thumbnail_url() ?>" alt="<?the_title()?>" title="<?the_title()?>">
                   </div>
                   <div class="cats">
                    <span>
                     <?php 
                       foreach( get_the_terms($post->ID,'category',1) as $cat): 
                        echo $cat->name .' ';
                         endforeach;
                         ?>
                      </span>
                   </div>
                   <h2><?php the_title(); ?></h2>
                   <div class="dateTime">
                     <span><i class="fa fa-clock-o"></i> <?php echo get_the_date('Y-m-d'); ?></span>
                     <span><i class="fa fa-user"></i> 
                      <? $userWriter = get_userdata($post->post_author); ?> 
                        <?=  $is_admin = ($userWriter->user_login == 'admin') ? 'ادمن' : $userWriter->user_login;?>
                    </span>
                   </div>
                   <div class="content">
                     <p><?php echo wp_trim_words(get_the_content(),15,' .. ') ?></p>
                   </div>
                    <span class="view">
                 <?=get_post_meta($post->ID,'viewss',1)?> <i class="fa fa-eye"> </i>
               </span>
                 </a>
               </div>