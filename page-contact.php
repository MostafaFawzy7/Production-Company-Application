<?php get_header()  ?>
 <?php wp_reset_query();  ?>

<section class="contactWithUs2">
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
                <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Email*">
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
<?php get_footer();  ?>