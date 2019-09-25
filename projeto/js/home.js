    // SCROLL PARA BAIXO DO 'V' pagina homr
    const vai = (elem) => {
        window.scroll({
            top: document.querySelector(`#${elem}`).offsetTop, // 2
            left: 0,
            behavior: 'smooth' // 3
        });
    }
        
        
        const target = document.querySelectorAll('[data-anime]');
        const animationClass = 'animate';

        // https://www.youtube.com/watch?v=pKTOT63X9XQ
        function animeScroll() {
            const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
            target.forEach(function (element) {
                if ((windowTop) > element.offsetTop) {
                    element.classList.add(animationClass);
                } else {
                    element.classList.remove(animationClass);
                }

            })
        }

        animeScroll();

        if (target.length) {
            window.addEventListener('scroll', function () {
                animeScroll();
            })
        }