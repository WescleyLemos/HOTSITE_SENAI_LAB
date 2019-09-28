    // SCROLL PARA BAIXO DO 'V' pagina homr
    const setavai = (elem) => {
        window.scroll({
            top: document.querySelector(`#${elem}`).offsetTop, // 2
            left: 0,
            behavior: 'smooth' // 3
        });
    }

    // SCROLL PARA BAIXO links
    const vai = (elem) => {
        window.scroll({
            top: document.querySelector(`#${elem}`).offsetTop - .68 * 100, // 2
            left: 0,
            behavior: 'smooth' // 3
        });
    }