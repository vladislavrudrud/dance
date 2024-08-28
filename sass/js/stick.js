jQuery("document").ready(function($){

    var nav = $('.stick-menu');
    var $padding = $(window).width() < 750 ? 94 : 220;

    $(window).scroll(function () {
        if ($(this).scrollTop() > $padding) {
            nav.addClass("stickyeah");
        } else {
            nav.removeClass("stickyeah");
        }
    });

});