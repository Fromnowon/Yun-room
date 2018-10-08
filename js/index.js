$(function () {
    $('.course_play a').on('click', function () {
        $('.player').append("<embed src='"+$(this).attr('value')+"'>");
    })
})