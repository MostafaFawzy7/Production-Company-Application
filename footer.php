        <div class="footer">
           
           <div class="container">
                
                <div class="topFooter">
                    
                    <div class="logo">
                      <h1>
                         <?php  if(get_option('logo') !='') {
                          ?>
                            <a href="<?=home_url()?>">
                             <img src="<?=get_option('logo')?>" title="<?=get_option('LogoTxT')?>">
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


                   <div class="footerLogo">
                
                      <div class="about-company">
                        
                        <p class="word-of-company"><?=YC_GetOpt('word')?></p>
                      
                      </div>
                      
                      <ul class="social-icons">
                          
                          <li>
                            <a href="<?php echo get_option('facebook'); ?>" class="facebook"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          
                          <li>
                            <a href="<?php echo get_option('twitter'); ?>" class="twitter"><i class="fab fa-twitter"></i></a>
                          </li>
                          
                          <li>
                            <a href="<?php echo get_option('youtube'); ?>" class="youtube"><i class="fab fa-youtube"></i></a>
                          </li>
                          
                          <li>
                            <a href="<?php echo get_option('instagram'); ?>" class="instagram"><i class="fab fa-instagram"></i></a>
                          </li>
                          
                          <li>
                            <a href="<?php echo get_option('googleplus'); ?>" class="google"><i class="fab fa-google-plus-g"></i></a>
                          </li>
                          
                          <li>
                            <a href="<?php echo get_option('telegram'); ?>" class="telegram"><i class="fab fa-telegram-plane"></i></a>
                          </li>
                      
                      </ul>
                  </div>
                
        
                </div>
        
          </div>
        
        </div>
        
        <div class="alignleft">
            <div class="container">
              <div class="footer-container">
                <div class="left">
                      Powered By <a href="http://www.yourcolor.net"> Your Color | YourColor.Net</a>              
                </div>
                <div class="right">
                     All CopyRights Reserved To <a href="<<?php echo home_url() ?>"><?php echo bloginfo( 'name' ) ?></a>  &copy; <?php echo the_time( 'Y' ) ?>
                </div>
              </div>
            </div>
        </div>

        <script src="<?=get_template_directory_uri()?>/Inc/js/wow.min.js"></script>
        <script>  new WOW().init();</script>
        
        <?php wp_footer(); ?>
    
    </div>
 
  </body>
</html>