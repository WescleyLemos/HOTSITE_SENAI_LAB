<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">



	<link rel="stylesheet" href="{{asset('css/downloads.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/menu-rodape.css')}}" type="text/css">

	<title>Downloads</title>
</head>

<body>

 	<!-- ------------------------------MENU------------------------------ -->
		<header class="cabecalho">
			<img src="img/downloads.png" width="100%" class="downloads">
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



		<!-- ---------------- Artigo 1-------------------------------->
		<article class="mainArticle">
			<h1>IMPRESSORA 3D </h1>
			<ul>
				<li> <a href="">Projeto1</a> </li>
				<li> <a href="">Projeto2</a> </li>
				<li> <a href="">Projeto3</a> </li>
				<li> <a href="">Projeto4</a> </li>
			</ul>
		</article>

		<aside class="mainAside">
			<img src="img/Impressora3d-cortada.png" width="400"  class="lab">
		</aside>

		<!-- ---------------- Artigo 2---------------------------------->
		<article class="mainArti">
			<h1>CORTE A LASER</h1>
			<ul>
				<li> <a href="">Projeto1</a> </li>
				<li> <a href="">Projeto2</a> </li>
				<li> <a href="">Projeto3</a> </li>
				<li> <a href="">Projeto4</a> </li>
			</ul>
		</article>

		<aside class="mainAsi">
			<img src="img/maquina-laser-cortada.png" width="400"  class="lab">
		</aside>


		<!--  ---------------- RODAPÉ----------------------------------> 
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

</body>
<script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
<script src="{{asset('js/onScroll.js')}}" type="text/javascript"></script>

</html>
