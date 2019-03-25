jQuery( document ).ready(function($){

            offsetFade = 130;
            offsetFadeButton = 700;
            speed = 850,
            duration = 500,
            scrollButton = $('.border-button-btt');
            fade = $('.fade');
            fadeButton = $('.button-fade');
            backButton = $('.border-button-back')
            stickyTitle = $('.sticky-title')

        $(window).bind('resize', function(){
          if ($(this).width()<900) {
            $('.sticky-title').removeClass('fade').addClass('visible')
          } else {
            $('.sticky-title').removeClass('visible').addClass('fade')
          }
        }).trigger('resize');


        $( window ).scroll( function() {
          if ( $( this ).scrollTop() < offsetFadeButton ) {
            fadeButton.css('opacity',0);
          } else {
            fadeButton.css('opacity',1);
          }

          if ( ($( this ).scrollTop() < offsetFade ) && ($(this).width()>900)) {
            fade.css('opacity',0);
          } else {
            fade.css('opacity',1);
          }


        });

    scrollButton.on( 'click', function(e){
      e.preventDefault();
      $( 'html, body' ).animate({
        scrollTop: 0
      }, speed);
    });

    backButton.on('click', function(e){
      e.preventDefault();
      window.history.back();
    });
  });
