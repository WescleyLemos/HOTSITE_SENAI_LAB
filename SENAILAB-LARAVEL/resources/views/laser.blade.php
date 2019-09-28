<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Máquina de Corte a Laser</title>


    <link rel="stylesheet" href="{{asset('css/onScroll.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/impressora-laser.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/laser.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/menu-rodape.css')}}" type="text/css">

</head>




<body>
    <!-- ------------------------------MENU------------------------------ -->
    <header class="cabecalho">
        <img src="./img/banner-laser.png" alt="">
        <div class="navbar" id="nav">
        <ul>
                <li class="li"> <a id="home" class="li">Home</a> </li>
                <li class="li"> <a id="projetos" class="li" >Projetos</a> </li>
                <li class="li"> <a id="noticias" class="li" >Notícias</a> </li>
                <li class="li"> <a id="downloads" class="li">Downloads</a> </li>
                <li class="li"> <a id="sobre" class="li">Sobre</a> </li>
                <li class="li"> <a id="contato" class="li">Fale Conosco</a> </li>
        </ul>
        </div>
    </header>
    <!-- ---------------------------------------------------------------- -->
    <main>
        <div class="div-descricao">
            <h1>DESCRIÇÃO</h1>
            <p data-anime="esquerda">editoração
                eletrônica como o
                Aldus PageMaker, incluindo
                versõeLorem Ipsum é
                simplesmente um texto fictício da
                indústria tipográfica e de
                impressão Lorem Ipsum é o texto
                fictício padrão do setor desde os
                anos 1500 quando uma
                impressora desconhecida pegou
                uma galera do tipo e a mexeu para
                fazer um livro de amostras do
                tipo Ele sobreviveu não apenas
                cinco séculos, mas também o salto</p>

            <img src="./img/maquina-laser-cortada.png" alt="impressora3d" data-anime="direita">
        </div>


        <div class="div-projetos">
            <img src="./img/projetos-fundo.png" alt="">

            <h1>PROJETOS</h1>

            <div class="card-projetos p1">
                <img src="./img/maquina-laser.jpg" alt="">
                <p>Nome Projeto 1</p>
                <a href="">Downloads</a>
            </div>

            <div class="card-projetos p2 ">
                <img src="./img/maquina-laser.jpg" alt="">
                <p>Nome Projeto 2</p>
                <a href="">Downloads</a>
            </div>

            <div class="card-projetos p3">
                <img src="./img/maquina-laser.jpg" alt="">
                <p>Nome Projeto 3</p>
                <a href="">Downloads</a>
            </div>

            <div class="card-projetos p4">
                <img src="./img/maquina-laser.jpg" alt="">
                <p>Nome Projeto 4</p>
                <a href="">Downloads</a>
            </div>

            <div class="card-projetos p5 ">
                <img src="./img/maquina-laser.jpg" alt="">
                <p>Nome Projeto 5</p>
                <a href="">Downloads</a>
            </div>

            <div class="card-projetos p6">
                <img src="./img/maquina-laser.jpg" alt="">
                <p>Nome Projeto 6</p>
                <a href="">Downloads</a>
            </div>

            <a class="paginacao" href="#">Paginação</a>

        </div>
    </main>


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
<script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
<script src="{{asset('js/onScroll.js')}}" type="text/javascript"></script>

</html>