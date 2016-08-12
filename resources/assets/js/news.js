/* global $ */
'use strict'

;(function () {
  $(document).ready(() => {
    $('.read').click(function () {
      const read = $(this)
      console.log(`Loading data from ${read.data('url')}`)

      $.get(read.data('url'), response => {
        console.log('Received response:', response)

        const modal = $('.modal')
        modal.find('.modal-title').html(response.data.title)
        modal.find('.modal-body').html(response.data.data)
        modal.modal()
      })
    })
  })
})()
