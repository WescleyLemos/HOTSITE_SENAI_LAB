<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notícias</title>

    <link rel="stylesheet" href="{{asset('css/menu-rodape.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/noticia-aberta.css')}}" type="text/css">


</head>




<body>
    <div id="fb-root"> </div>
    <script assíncrono adia crossorigin="anônimo" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0">
    </script>
    <!-- ------------------------------MENU------------------------------ -->
    <header class="cabecalho">
        <img src="./img/banner-noticias.png" alt="">
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


    <!-- ------------------------------MAIN-------------------------- -->
    <main class="conteudo-principal">

        <div class="link-noticia-atual">
            <a href="noticias">Notícias </a>
            <p class="separador">&nbsp;/</p>
            <p> &nbsp; TÍTULO DESSA NOTÍCIA </p>
        </div>



        <div class="noticia-box">
            <img src="./img/img.png" alt="imagem-noticas-card-pequeno" class="img-card">
            <div class="data">
                <p class="dia">12</p>
                <p class="mes">DEZ</p>
                <p class="ano">2019</p>
            </div>

            <div class="card-texto">
                <div class="linha"></div>
                <p class="tag-card">#TAG</p>
                <p class="texto-noticia">Sed
                    ut perspiciatis unde omnis iste natus error sit
                    doloremque laudantium Sed ut perspiciatis unde omnis iste
                    natus error sit doloremque laudantium Sed ut perspiciatis
                    unde omnis iste natus error sit doloremque laudantium Sed
                    ut perspiciatis unde omnis iste natus error sit doloremque
                    laudantium Sed ut perspiciatis unde omnis iste natus error sit
                    doloremque laudantium Sed ut perspiciatis unde omnis iste
                    natus error sit doloremque laudantium Sed ut perspiciatis
                    unde omnis iste natus error sit doloremque laudantium Sed
                    ut perspiciatis unde omnis iste natus error sit doloremque
                    laudantium Sed ut perspiciatis unde omnis iste natus error sit
                    doloremque laudantium Sed ut perspiciatis unde omnis iste
                    natus error sit doloremque laudantium Sed ut perspiciatis
                    unde omnis iste natus error sit doloremque laudantium Sed ut
                    perspiciatis unde omnis iste natus error sit doloremque laudantium Sed
                    ut perspiciatis unde omnis iste natus error sit doloremque laudantium
                    Sed ut perspiciatis unde omnis iste natus error sit doloremque
                    laudantium Sed ut perspiciatis unde omnis iste natus error sit
                    doloremque laudantium</p>
            </div>
        </div>
    </main>
    <!-- ------------------------------final MAIN-------------------------- -->

    <!-- ------------------------------PLUGIN COMENTARIOS-------------------------- -->
    <div class="fb-comments" data-href="arquivo: /// C: /Users/Wescley/Desktop/%23%20-%20HOTSITE-SENAI-LAB/projeto/noticia-aberta.html" data- width="100px" data-numposts="20">
    </div>
    <!-- ------------------------------ final PLUGIN COMENTARIOS-------------------------- -->





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



</html>