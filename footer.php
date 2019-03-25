<footer>
    <p>catheXis</p>
    <a href="<?php echo get_bloginfo('wpurl');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_logo_white_75x75.png"></a>
    <p><?php echo date("Y"); ?></p>
  </footer>

  <!-- <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/plugins.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script> -->


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

  <?php wp_footer(); ?>
</body>

</html>