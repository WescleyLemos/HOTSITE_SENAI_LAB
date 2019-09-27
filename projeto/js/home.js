    // SCROLL PARA BAIXO DO 'V' pagina homr
    const vai = (elem) => {
        window.scroll({
            top: document.querySelector(`#${elem}`).offsetTop, // 2
            left: 0,
            behavior: 'smooth' // 3
        });
    }