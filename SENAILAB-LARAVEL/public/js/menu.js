var nav = document.getElementById('nav');
var selecionar = document.title;
var tituloPagina = document.title;
var url_atual = window.location.href;
window.onscroll = function() {
    if (window.pageYOffset > 100) {
        nav.classList.add('nav-branca');
        selecionar.forEach(e => e.classList.remove('li'));

    } else {
        nav.classList.remove('nav-branca');
        selecionar.forEach(e => e.classList.add('li'));
    }
}


var home = document.getElementById('home');
var projetos = document.getElementById('projetos');
var noticias = document.getElementById('noticias');
var downloads = document.getElementById('downloads');
var sobre = document.getElementById('sobre');
var contato = document.getElementById('contato');


home.setAttribute('href', '/');

downloads.setAttribute('href', 'downloads');
sobre.setAttribute('href', 'sobre');
contato.setAttribute('href', 'contato');


if (tituloPagina == 'Senai Lab') {
    projetos.setAttribute('href', 'javaScript: void(0);')
    noticias.setAttribute('href', 'javaScript: void(0);')
} else {
    projetos.setAttribute('href', 'projetos#baixo');
    noticias.setAttribute('href', 'noticias')


}



if (url_atual.indexOf("projetos#baixo" != -1)) {
    nav.classList.add('nav-branca');
    selecionar.forEach(e => e.classList.remove('li'));

}