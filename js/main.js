
(function($){

    $(document).ready(function(){
        $(".menu-toggle a").click(function(){
            $(".menu").slideToggle(400, 'linear');
            return false;
        });
    });

    // var didScroll;
    // var lastScrollTop = 0;
    // var delta = 5;

    // $(window).scroll(function(event){
    //     didScroll = true;
    // });

    // setInterval(function() {
    //     if (didScroll) {
    //         hasScrolled();
    //         didScroll = false;
    //     }
    // }, 100);

    // function hasScrolled() {
    //     var st = $(this).scrollTop();
    //     var winWidth = $(window).width();

    //     // check that scroll is more than delta
    //     if(Math.abs(lastScrollTop - st) <= delta)
    //     return;

    //     // check that scroll is past the navbar, add class .nav-up.
    //     if ((st > lastScrollTop) && (winWidth < 480)) {
    //         $('header').removeClass('nav-down').addClass('nav-up');
    //     } else {
    //         // Scroll Up
    //         if(st <= 75) {
    //             $('header').removeClass('nav-up').addClass('nav-down');
    //         }
    //     }

    //     lastScrollTop = st;
    // }


})(jQuery);
