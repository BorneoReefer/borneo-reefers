$(window).scroll(function() {
        var scroll = $(window).scrollTop() / 2;
    $('.index-parallax-image').css('top', -400 + scroll);
});
