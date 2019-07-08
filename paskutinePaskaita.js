var meniu = [
    {
        "title": "Pradzia", "url": "/index.html"
    },
    {
        "title": "Portfolio", "url": "/Portfolio.html"
    },
    {
        "title": "Kontaktai", "url": "/kontaktai.html"
    }];

$.get(
    '/failas.json',
    renderMeniu
);

function renderMeniu() {

    var links = '';
    for (var i = 0; i < meniu.length; i++) {
        links += '<a href="' + meniu[i].url + '">' + meniu[i].title
        '</a>';
        console.log(links);
    }
    $('nav.top').html(links);

}
