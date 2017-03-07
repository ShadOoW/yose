$(document).ready(function() {
    $('.grid > div').each(function( index ) {
        $(this).css('background-color', randomColor());
    });

    setInterval(function() {
        var x = Math.floor(Math.random() * 8) + 1  , y = Math.floor(Math.random() * 8) + 1;

        $('#' + x + 'x' + y).css('background-color', randomColor());
    }, 400);
});
