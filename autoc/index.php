<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Autocar - Centro Automotivo</title>
<!--META TAGS-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Gustavo Vaz">
	<meta name="descryption" content="autocar Reparos Automotivos">
	<meta name="keywords" content="mecânica,elétrica,eletrônica automotiva">
	<meta name="robots" content="index,follow">
<!--ÍCONE-->
	<link rel="icon" href="img/icon.png">
<!--MATERIALIZE CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!--CUSTOM CSS-->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
<!--GOOGLE ÍCONES-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--FONTS AWESOME-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--GOOGLE FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
</head>
<body>	
<!--MENU - NAVBAR-->
	<header>
<!--SIDENAV-->
		<ul class="sidenav" id="menu-mobile">
					<li><a href="#home" class="sidenav-close">Home</a></li>
					<li><a href="#sobre" class="sidenav-close">Sobre a Autocar</a></li>
					<li><a href="#blog" class="sidenav-close">Blog</a></li>
					<li><a href="#contato" class="sidenav-close">Contato</a></li>
				</ul>
<!--MENU PRINCIPAL-->
	<div class="navbar-fixed">
		<nav class="navbar white">
			<div class="nav-wrapper container">
				<h1 class="logo-txt">Autocar - Centro Automotivo</h1>
				<a href="index.html"><img src="img/logo.png" alt="Autocar" class="logo-img"></a>
				<ul class="menu hide-on-med-and-down right">
					<li><a href="#home">Home</a></li>
					<li><a href="#sobre">Sobre a Autocar</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#contato">Contato</a></li>
				</ul>
				<a href="#" class="sidenav-trigger right" data-target="menu-mobile"><i class="material-icons menu_mobile_icon">menu</i></a>
			</div>
		</nav>
	</div>
	</header>
<!--CABEÇALHO - MENU-->
	<div class="parallax-container">
	<section class="home bloco scrollspy" id="home">		
		<div class="banner row container">
			<div class="col s12 center">
				<h1 class="cor-txt">Venha nos visitar</h1>
				<p class="white-text light">Agende uma visita e ganhe uma revisão básica grátis</p>
				<a href="#sobre" class="btn btn-large white-text">Agendar visita</a>
			</div>			
		</div>
		<div class="parallax"><img src="img/bg1.jpg"></div>					
	</section>
	</div>	
<!--CARACTERISTICAS - MEC. CARROS-->
	<section class="caracteristicas">
	<div class="row container">
		<div class="col s12 m4 center">
			<div class="carac">
				<h2><i class="material-icons medium cor-txt2">directions_car</i></h2>
				<h5>Mecânica de Autos</h5>
				<p>Trabalhamos com as principais marcas de veículos nacionais e importados, possuímos grande estoque de peças de reposição além ter os melhores preços da região pois somos uma revendedora autorizada de peças automotivas. </p>
			</div>
		</div>
<!--CARACTERISTICAS - MEC. MOTOS-->
		<div class="col s12 m4 center">
			<div class="carac">
				<h2><i class="material-icons medium cor-txt2">motorcycle</i></h2>
				<h5>Mecânica de Motos</h5>
				<p>Honda, Yamaha, Suzuki, Dafra, Shineray, Kawasaki e Harley Davidson são algumas das marcas que trabalhamos e que somos revendedores oficiais. Venha conferir também a nova linha de capacetes e acessórios que estamos trabalhando.</p>
			</div>
		</div>
<!--CARACTERISTICAS - REVENDA AUTORIZADA-->
		<div class="col s12 m4 center">
			<div class="carac">
				<h2><i class="material-icons medium cor-txt2">shopping_cart</i></h2>
				<h5>Revenda de Peças</h5>
				<p>Possuímos um imenso estoque de peças para o seu carro ou sua moto, somos revenda oficial das principais marcas do Brasil e do mundo, devido a isso sempre conseguimos descontos exclusivos para todos os nossos clientes.</p>
			</div>
		</div>
	</div>
	</section>
<!--SEÇÃO SOBRE NÓS-->
	<section class="sobre bloco cor-fundo scrollspy" id="sobre">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="white-text">Sobre nós</h2>
				<p class="white-text">A Autocar é uma empresa consolidada no mercado de automóveis e motocicletas, desde 1998 no ramo, além de possuir excelente mão de obra para cuidar da mecânica do seu carro ou sua moto, também somos revenda autorizada dos principais fabricantes de peças nacionais e importadas. Venha nos conhecer mais, agende uma visita e ganhe uma revisão básica gratuita na sua moto ou carro.</p>				
				<h5 class="white-text">Agende uma visita</h5>
		</div>
		<div class="row container">
		<div class="col s12 m6">
			<div class="agendamento">
			<h6>Preencha o formulário</h6>
			<form class="post" action="mail.php">
				<div class="input-field">
					<input type="text" name="name" id="name" required>
					<label for="name" class="black-text">Seu nome</label>
				</div>	
				<div class="input-field">
					<input type="email" name="email" id="email" required>
					<label for="email" class="black-text">Seu email</label>
				</div>
				<div class="input-field">
					<input type="text" name="phone" id="phone" required>
					<label for="phone" class="black-text">Telefone</label>
				</div>				
				<input type="text" name="hour" list="hour" placeholder="Hora" required>	
					<datalist id="hour">
  						<option value="11:00">  
  						<option value="12:00">
  						<option value="13:00">
  						<option value="14:00">
					</datalist>
				<div class="input-field">
					<input type="date" name="date" id="date" class="black-text" required>
				</div>
				<button class="btn cor-fundo" type="submit">Agendar</button>
			</form>
			</div>
		</div>
		<div class="col s12 m6">
			<div class="mapa tranparent">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.015374083321!2d-46.69379018581613!3d-23.603781569043576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57350875d01d%3A0xfc6aa2a847d61652!2sAutoFix%20%C2%AE%20Auto%20Service!5e0!3m2!1spt-BR!2sbr!4v1572641106790!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>		
		</div>
	</section>
<!--SEÇÃO CONTATO-->
	<div class="parallax-container scrollspy" id="contato">
		<section class="contatos bloco">
			<div class="row container">
				<div class="col s12 m4 center">					
					<article class="contato">
						<h2 class="cor-txt2">Contato SP</h2>
						<p>
							<i class="material-icons left">phone</i>(11) 321-8585<br>
							<i class="material-icons left">phone</i>(11) 321-9091<br>
							<i class="material-icons left">stay_primary_portrait</i>(11) 98585-2463<br>
							<i class="material-icons left">stay_primary_portrait</i>(11) 9985-2562
						</p>
					</article>
					</div>
				<div class="col s12 m4 center">
					<article class="contato">
						<h2 class="cor-txt2">Contato RJ</h2>
							<p>
							<i class="material-icons left">phone</i>(21) 321-4587<br>
							<i class="material-icons left">phone</i>(21) 321-5555<br>
							<i class="material-icons left">stay_primary_portrait</i>(21) 88585-2463<br>
							<i class="material-icons left">stay_primary_portrait</i>(21) 8885-2562
						</p>
					</article>
					</div>
				<div class="col s12 m4 center">
					<article class="contato">
						<h2 class="cor-txt2">Redes Sociais</h2>
							<a href="#" class="btn btn-floating cor-fundo"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-floating cor-fundo"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-floating cor-fundo"><i class="fa fa-google"></i></a>
							<a href="#" class="btn btn-floating cor-fundo"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-floating cor-fundo"><i class="fa fa-pinterest"></i></a>
							<a href="#" class="btn btn-floating cor-fundo"><i class="fa fa-envelope"></i></a>
					</article>
					</div>		
				
			</div>
			<div class="parallax"><img src="img/bg2.jpg"></div>
		</section>
	</div>
<!--SEÇÃO RODAPÉ FOOTER-->
	<footer class="rodape">
		<div class="row container">
			<div class="col s12 center">
				<a href="index.html"><img src="img/logo-mobile.png"></a>
				<p>Copyright © Autocar 2017 - Todos os direitos reservados.</p>
			</div>			
		</div>
	</footer>
	<!--ALERTAS-->
	<!-- SUCCESS -->
	<?php if(isset($_GET['status']) && $_GET['status'] == 'success'){ ?>
          <script>
               alert('Visita agendada com sucesso!');
          </script>
      <?php } ?> 
	<!-- ERROR -->
	<?php if(isset($_GET['status']) && $_GET['status'] == 'error'){ ?>
          <script>
               alert('Falha ao agendar visita, por favor tente novamente...');
          </script>
      <?php } ?> 	  
<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--MATERIALIZE JS-->	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!--JQUERY CODES-->
	<script>
		$(document).ready(function(){
			//SIDENAV
			$(".sidenav").sidenav();
			//PARALLAX
			$(".parallax").parallax();
			//SCROLLSPY
			$(".scrollspy").scrollSpy({
				scrollOffset:0
			});
		});
	</script>
</body>
</html>