$(function(){

    $('#change-color').on('click', function(){
        $('p').css('color', 'red');
    });

    $('#change-text').on('click', function(){
        $('p').text('Hello!');
    });

    $('#fade-out').on('click', function(){
        $('p').fadeOut();
    });

    $('#fade-in').on('click', function(){
        $('p').fadeIn();
    });

});