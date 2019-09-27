<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Mega&display=swap" rel="stylesheet">
    <title>Senai Lab</title>
    <link rel="stylesheet" href="{{asset('css/menu-rodape.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/onScroll.css')}}" type="text/css">


</head>


<body>
    <!-- ------------------------------MENU------------------------------ -->
    <header class="cabecalho">
        <img src="./img/logo-home.png" alt="logo-home" class="logo-home">
        <div class="navbar" id="nav">
            <ul>
                <li> <a id="home" class="a">Home</a> </li>
                <li> <a id="projetos" class="a">Projetos</a> </li>
                <li> <a id="downloads" class="a">Downloads</a> </li>
                <li> <a id="sobre" class="a">Sobre</a> </li>
                <li> <a id="contato" class="a">Fale Conosco</a> </li>
            </ul>
        </div>

        <div class="scroll-down">
            <a href="javaScript: void(0);" onclick="vai('baixo')">v</a>
        </div>

    </header>
    <!-- ---------------------------------------------------------------- -->


    <!-- ------------------------------PROJETOS-------------------------- -->
    <div class="projetos" id="baixo">

        <h1 class="h1-gradient-1" unselectable="on">PROJETOS</h1>
        <h3 class="subtitulo-projetos">Veja abaixo os principais projetos desenvolvidos pelo Senai Lab</h3>

        <div class="selecionar-projetos">
            <div class="box-projetos " data-anime="esquerda">
                <h2>MÁQUINA DE CORTE<br> A LASER</h2>
                <img src="./img/maquina-laser.jpg" alt="maquina-a-laser" class="box-laser">
            </div>

            <div class="box-projetos" data-anime="direita">
                <h2>IMPRESSORA 3D</h2>
                <img src="./img/Impressora3D.JPG" alt="impressora-3d" class="box-impressora">
            </div>
        </div>
        <div class="noticias-div">
            <img src="./img/noticias-titulo.png" alt="banner-titulo-noticias" class="banner-noticias">
            <h1 class=" noticias-titulo">NOTÍCIAS</h1>
        </div>
    </div>
    <!-- ---------------------------------------------------------------- -->

    <!-- ------------------------------NOTÍCIAS-------------------------- -->

    <div class="noticias">

        <div class="botoes-div">
            <button class="botoes bt-impressora">Impressora 3d</button>
            <button class="botoes bt-laser">corte a lazer</button>
        </div>
        <div class="noticia-principal" data-anime="esquerda">

            <p class="tag">#TAG</p>
            <p class="titulo-principal">Texto da notícia principal e tals </p>
        </div>


        <div class="noticia-box noticia2" data-anime="direita">
            <img src="./img/img.png" alt="imagem-noticas-card-pequeno" class="img-card">
            <div class="card-texto">
                <div class="linha"></div>
                <p class="tag-card">#TAG</p>
                <p class="titulo-card">Texto da notícia principal e tals </p>
            </div>
        </div>

        <div class="noticia-box noticia3" data-anime="esquerda">
            <img src="./img/img.png" alt="imagem-noticas-card-pequeno" class="img-card">
            <div class="card-texto">
                <div class="linha"></div>
                <p class="tag-card">#TAG</p>
                <p class="titulo-card">Texto da notícia principal e tals </p>
            </div>
        </div>

        <div class="noticia-box noticia4" data-anime="esquerda">
            <img src="./img/img.png" alt="imagem-noticas-card-pequeno" class="img-card">
            <div class="card-texto">
                <div class="linha"></div>
                <p class="tag-card">#TAG</p>
                <p class="titulo-card">Texto da notícia principal e tals </p>
            </div>
        </div>

        <div class="noticia-box noticia5" data-anime="direita">
            <img src="./img/img.png" alt="imagem-noticas-card-pequeno" class="img-card">
            <div class="card-texto">
                <div class="linha"></div>
                <p class="tag-card">#TAG</p>
                <p class="titulo-card">Texto da notícia principal e tals </p>
            </div>
        </div>

        <div class="link"><a href="noticias">
                Mais Notícias >>
            </a></div>


    </div>
    <!-- ---------------------------------------------------------------- -->


    <!-- ------------------------------RODAPÉ-------------------------- -->
    <footer class="rodape">
        <div class="div-social">
            <img src="./img/facebook.png" alt="facebook" class="img-social">
            <img src="./img/twiter.png" alt="twiter" class="img-social">
            <img src="./img/instagran.png" alt="instagran" class="img-social">
            <img src="./img/youtube.png" alt="youtube" class="img-social">
        </div>

        <div class="div-links">
            <a href="#">Cursos</a>
            <a href="#">Contato</a>
        </div>

        <div>
            <p>Rua tal , setor tal e tal CEP 777777777</p>
        </div>

        <div>
            <p>Copyright 2018 © SENAI ● Todos os direitos reservados</p>
        </div>

    </footer>
    <!-- ---------------------------------------------------------------- -->

</body>
<script src="{{asset('js/home.js')}}" type="text/javascript"></script>
<script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
<script src="{{asset('js/onScroll.js')}}" type="text/javascript"></script>

</html>