$(document).ready(function() {
    function load() {
        console.log('loaded');
        this.document.grid = [
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'bomb' , 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
        ];

        var values = $.map( this.document.grid, function(n){
            return n;
        });

        $('.grid .cell').each(function (index) {
            this.setAttribute('data-value', values[index]);
        }).click(function() {
            if ($(this).data('value') === 'bomb') {
                $(this).addClass('lost');
            }
        });
    }

    $('.grid .cell').each(function( index ) {
        $(this).css('background-color', randomColor());
    });

    setInterval(function() {
        var x = Math.floor(Math.random() * 8) + 1  , y = Math.floor(Math.random() * 8) + 1;

        $('#' + x + 'x' + y).css('background-color', randomColor());
    }, 400);

    load();
});
