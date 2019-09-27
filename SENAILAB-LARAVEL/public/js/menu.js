var nav = document.getElementById('nav');
        var selecionar = document.querySelectorAll('.li')

        window.onscroll = function () {
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
        var downloads = document.getElementById('downloads');
        var sobre = document.getElementById('sobre');
        var contato = document.getElementById('contato');

        home.setAttribute('href','/' );
        downloads.setAttribute('href','downloads' );
        sobre.setAttribute('href','sobre' );
        contato.setAttribute('href','contato' );
        projetos.setAttribute('href','projetos' );