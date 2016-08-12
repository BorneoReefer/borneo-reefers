/* global $ tinymce */
'use strict'

;(function () {
  $(document).ready(() => {
    tinymce.init({
      selector: 'textarea'
    })

    $('.form-submit').click(function () {
      const btn = $(this)
      const data = {
        '_token': $('meta[name=_token]').attr('content'),
        'title': $('input').val(),
        'data': tinymce.activeEditor.getContent()
      }

      console.log(data)

      $.ajax({
        method: btn.data('method'),
        url: btn.data('url'),
        data: data
      }).done(response => {
        if (btn.data('redirect')) {
          window.location = btn.data('redirect')
        } else {
          window.location.reload()
        }
      })
    })
  })
})()
