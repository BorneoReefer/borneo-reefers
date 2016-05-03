if ($(window).width() > 768) {
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
    $('#index-row-1').collapse()
    $('#index-row-2').collapse()
    $('#index-row-3').collapse()
}
