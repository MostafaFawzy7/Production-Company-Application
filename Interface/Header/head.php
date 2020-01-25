<?php
/**
* The Header for our theme
*
* Displays all of the <head> section and everything up till <div id="main">
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html 
      <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>

  <!--- Stylesheet  -->
  <link href="https://fonts.googleapis.com/css?family=Anton|Cairo|Aref+Ruqaa" rel="stylesheet">
  <link rel="stylesheet" media="all" href="<?=ThemeDirURI?>/Inc/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="<?=ThemeDirURI?>/Inc/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="<?=ThemeDirURI?>/Inc/css/owl.theme.default.min.css">
    <?php if(!wp_is_mobile()) {  ?>
    <!-- Desktop Styles Files   -->
    <link rel="stylesheet" media="all" href="<?=ThemeDirURI?>/style.css?<?=rand()?>" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <?php  } else { ?>
    <!-- Mobile Styles  Files  -->
    <link rel="stylesheet" media="all" href="<?=ThemeDirURI?>/styleMobile.css" />
    <?php } ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonYSous">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:700" rel="stylesheet">
    <!--- Javascript -->
    <script type="text/javascript" src="<?=ThemeDirURI?>/Inc/js/jquery-1.8.2.min.js">
    </script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

    <script type="text/javascript" src="<?=ThemeDirURI?>/Inc/js/owl.carousel.min.js">
    </script>
    <script src="https://unpkg.com/shufflejs@5"></script>
    <script type="text/javascript" src="<?=ThemeDirURI?>/Inc/js/main.js">      
    </script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/snap.svg-min.js"></script>

 </head>