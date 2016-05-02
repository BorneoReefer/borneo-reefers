if ($(window).width() > 480) {
    $('div#myNavbar.collapse.navbar-collapse').hover(
        function() {
            $('.banner-index').css('height', '50px')
            $('.index-logo').css('top', '70px')

        },
        function() {
            $('.banner-index').css('height', '5px')
            $('.index-logo').css('top', '0px')
        }
    )
}
