$(function () {
    $('.lempute').on({
        'click': function() {
            var src = ($(this).attr('src') === 'img/on.jpg')
                ? 'img/off.jpg'
                : 'img/on.jpg';
            $(this).attr('src', src);
        }
    });
});
