$(document).ready(function () {
    var meniu = '';
    $.get("/failas.json", function (data, status) {
        console.log(status);
        console.log(data);
        meniu = data;
        var links = '';
        for (var i = 0; i < meniu.length; i++) {
            var titlas = meniu[i].title;
            var hrefas = meniu[i].url;
            links += "<a href='" + hrefas + "'>" + titlas + "</a>";
        }
        $('.top').html(links);
    });
});
