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

    