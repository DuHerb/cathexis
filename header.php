<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>catheXis</title>
  <meta name="description" content="catheXis is a smallpress publisher of contemporary poetry.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Muli:extra-light|Questrial" rel="stylesheet"> -->
  <!-- <link href="<?php echo get_bloginfo('template_directory'); ?>css/normalize.css" rel="stylesheet"> -->
  <!-- <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet"> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <div class="logo">
    <a href="<?php echo get_bloginfo('wpurl');?>">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_logo_black_75x75.png">
    </a>
  </div><!-- .logo -->
  <header class="nav-down">
    <div class="masthead">
      <div class="masthead-text">
        <a href="<?php echo get_bloginfo('wpurl');?>">catheXis northwest press</a>
      </div><!-- .masthead-text -->

      <nav class="nav-main menu"><!-- Mobile Menu by Mario Loncarek via Codepen.  Thanks Mario -->
        <ul>
            <?php wp_list_pages( '&title_li='); ?>
        </ul>
      </nav><!-- .nav-main .menu -->
      <nav class="nav-static-container"><!-- Static Menu for non mobile -->
        <ul class="nav-static">
          <?php wp_list_pages( '&title_li='); ?>
        </ul>
      </nav><!-- nav-static-container -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
      <div class="menu-toggle">
        <!-- <a href="#"><i class="fa fa-angle-double-down"></i></a> -->
        <a href="#"><i class="fa fa-bars"></i></a>
      </div><!-- .menu-toggle -->
    </div><!-- .masthead -->
  </header>
