<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">



	<link rel="stylesheet" href="{{asset('css/downloads.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/menu-rodape.css')}}" type="text/css">
	<!-- <script type="text/javascript" src="js/menu.js"></script> -->
	<title>Downloads</title>
</head>

<body>

	<div id="container">
		<header class="cabecalho">
			<img src="img/downloads.png" width="100%" class="downloads">
			<div class="navbar" id="nav">
				<ul>
					<li> <a id="home" class="a">Home</a> </li>
					<li> <a id="projetos" class="a">Projetos</a> </li>
					<li> <a id="downloads" class="a">Downloads</a> </li>
					<li> <a id="sobre" class="a">Sobre</a> </li>
					<li> <a id="contato" class="a">Fale Conosco</a> </li>
				</ul>
			</div>
		</header>



		<!-- ---------------- Artigo 1-------------------------------->
		<article class="mainArticle">
			<h3>IMPRESSORA 3D </h3>
			<ul>
				<li> <a href="">Projeto1</a> </li>
				<li> <a href="">Projeto2</a> </li>
				<li> <a href="">Projeto3</a> </li>
				<li> <a href="">Projeto4</a> </li>
			</ul>
		</article>

		<aside class="mainAside">
			<img src="img/Impressora3D.jpg" width="400" height="200" class="lab">
		</aside>

		<!-- ---------------- Artigo 2---------------------------------->
		<article class="mainArti">
			<h3>CORTE A LASER</h3>
			<ul>
				<li> <a href="">Projeto1</a> </li>
				<li> <a href="">Projeto2</a> </li>
				<li> <a href="">Projeto3</a> </li>
				<li> <a href="">Projeto4</a> </li>
			</ul>
		</article>

		<aside class="mainAsi">
			<img src="img/maquina-laser.jpg" width="400" height="200" class="lab">
		</aside>



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
<script src="{{asset('js/onScroll.js')}}" type="text/javascript"></script>

</html>