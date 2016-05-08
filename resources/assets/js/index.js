if ($(window).width() > 768) {
    $('div#myNavbar.collapse.navbar-collapse').hover(
        function() {
            $('.banner-index').css('height', '50px')

        },
        function() {
            $('.banner-index').css('height', '5px')
        }
    )
    $('#index-row-0').collapse()
    $('.menu-item').hover(function(){
        $('.collapse').removeClass('in')
        $(`#index-row-${$(this).data('target')}`).addClass('in')
    })
    $('#menu-history').click(function(){
        $('.collapse').removeClass('in')
        $(`#index-row-3`).addClass('in')
    })
}
