<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/contato.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/menu-rodape.css')}}" type="text/css">

    <title>Contato</title>


</head>

<body>
    <div id="container">

        <header class="cabecalho">
            <img src="img/banner-contato.png" width="100%">
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


        <nav class="mainH1">
            <h1>CONTATO</h1>
        </nav>

        <article class="mainArticle">
            <form action="">
                <input type="text" name="nome" placeholder="Nome" class="caixa">
                <input type="text" name="email" placeholder="E-mail" class="caixa">
            </form>

        </article>




        <aside class="mainConteudo">
            <textarea class="caixaMensagem" name="comentarios" id="coment" placeholder="Mensagem"></textarea>
        </aside>

        <article class="mainInput"></article>

        <aside class="mainButon">
            <input type="submit" value="ENVIAR" class="botao destaque" />
        </aside>

        <div class="mainDiv">
            <h4 class="canais">CONTATE-NOS TAMBÉM PELOS CANAIS</h4>
            <ul>
                <p> <strong>Telefone:</strong> +55 63 99999-9999</p>
                <p> <strong>E-mail:</strong> <a href="">email@email.com</a></p>
            </ul>

        </div>


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


    </div>
</body>
<script src="{{asset('js/menu.js')}}" type="text/javascript"></script>

</html>