$(function () {
    // $('.item1').hide();
    // $('.pagination').click(function () {
    //     $('.item1').show();
    // })
    // $('.lempute').click(function () {
    //     $(this).src = '/img/lamp-on.png';
    // })
    // $('.lempute').click(function(){
    //     $('.lempute').set.src= '/img/lamp-on.png'
    // });

    $('.lempute').on({
        'click': function() {
            var src = ($(this).attr('src') === 'img/on.jpg')
                ? 'img/off.jpg'
                : 'img/on.jpg';
            $(this).attr('src', src);
        }
    });


});