"use strict";

(function(){
    $(document).ready(() => {
        // Handle navbar hover event
        $('div#myNavbar.collapse.navbar-collapse').hover(
            () => {
                $('.banner-index').css('height', '50px')
                $('.index-logo').css('top', '70px')

            },
            () => {
                $('.banner-index').css('height', '5px')
                $('.index-logo').css('top', '0px')
            }
        )

        // Contextual items
        const contextSmall = $('#context')
        const contextView = $('#index-row-1 .content')

        // Context switching function
        const updateView = (context) => {
            const template = $(`.templates .template-${context}`)
            contextSmall.html(context)
            contextView.html(template.html())
        }

        // Set context button functionality
        $('.context-switch').click(function() { // Use function() to preserve 'this'
            updateView($(this).data('context'))
        })

        // Set default context
        updateView('services')
    })
})()
