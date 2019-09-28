<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/sobre.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/menu-rodape.css')}}" type="text/css">

    <title>Sobre</title>
</head>




<body>
    <!-- ------------------------------MENU------------------------------ -->

    <div id="container">
        <header class="cabecalho">
            <img src="img/banner-sobre.png" width="100%">
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

        <nav class="mainNav">
            <img src="img/logo-rose.png" width="45% " class="senai-lab">
        </nav>

        <article class="mainArticle">
            <p class="pesquisa">Pesquisa e inovação tecnologica para melhoria da educação.</p>
        </article>

        <aside class="mainAside">
            <p class="texto">tipográfica e de impressão. Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma <p class="texto">impressora desconhecida Ppaskpisadpkpsadkpkaspodkops Ppaskpisadpkpsadkpkaspodkop</p>

                <p class="texto">tipográfica e de impressão. Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma <p class="texto">impressora desconhecida Ppaskpisadpkpsadkpkaspodkops Ppaskpisadpkpsadkpkaspodkop Ppaskpisadpkpsadkpkaspodkop</p>

        </aside>

        <article class="article"><img src="img/Impressora Laser SENAI, F. Adilvan Nogueira  (27).jpg" width="100%" class="maquina-foto">
        </article>

        <article class="equipe">
            <h2>EQUIPE</h2>
        </article>


        <div class="div1">
            <img src="img/usuario.jpg" width="100" height="50" class="usuario">
            <h3>Fulano de Tal</h3>
            <p>Função Tal</p>
        </div>
        <div class="div2">
            <!-- <img src="img/usuario.jpg" width="100" height="50" class="usuario"> -->
            <h3>Fulano de Tal</h3>
            <p>Função Tal</p>
        </div>
        <div class="div3">
            <img src="img/usuario.jpg" width="100" height="50" class="usuario">
            <h3>Fulano de Tal</h3>
            <p>Função Tal</p>
        </div>






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
    </div>

</body>
<script src="{{asset('js/menu.js')}}" type="text/javascript"></script>

</html>