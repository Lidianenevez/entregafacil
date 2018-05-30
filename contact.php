<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EntregaFácil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Entrega rapida de produtos" />
	<meta name="keywords" content="entrega, produtos, alimentos, mercadoria, frete," />
	<meta name="author" content="Cleyton Amanajas, Lidiane Neves, Orcicley Junior" />
	<meta name = "google-signin-client_id" content ="141092798675-aidonmfo7vdoo2nmspcci67mtetqo7nq.apps.googleusercontent.com
 ">
	<style type="text/css">
		
		.material-icons{
			background-color: #fff;
			border: 1px solid #FFA500;
			border-radius: 20%;
			cursor: pointer;

		}
		.btn{
  		background-color: #FFA500;
  		color: #fff;
		}
		.gtco-social-icons li a{
			color:#FFA500;
		}
		p{
			color: #000;
		}


	</style>

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet ">
	<!-- gmail login -->
   
	</head>
	<body style="background-color: #fff;">
	<div class="gtco-loader"></div>
	<div id="page">
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation" >
		<div class="gtco-container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div id="gtco-logo"><a href="index.html">Entrega<span style="color: #FFA500;">Fácil</span></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="pricing.php">QUEM SOMOS</a></li>
					<li class="has-dropdown"><a href="#">CATEGORIAS</a>
					<ul class="dropdown">
						<li><a href="#">Alimentos e Bebidas</a></li>
						<li><a href="#">Bebês e Criaças</a></li>
							<li><a href="#">Autopeças</a></li>
								<li><a href="#">Contrução e Reforma</a></li>
								
								<li><a href="#">Materias de Limpeza</a></li>
								<li><a href="#">Utensílios Domésticos</a></li>
								<li><a href="#">Saúde</a></li>
								<li><a href="#">Papelarias e Livrarias</a></li>

							</ul>
						</li>
					<li><a href="contact.php">PEDIDOS</a></li>
						
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header role="banner" style="background-color: #000" >
		<div class="gtco-container">
			<div class="row">
			<div class="col-md-12">
				<div class="row row-mt-12em">
					<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>EntregaFácil, com ele tudo fica mais fácil!</h1>	
						</div>	
			</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>FAÇA SEU PEDIDO</h3>
					<form action="pedido_ok.php" method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">NOME</label>
								SEU NOME<input type="text" name="nome" id="name" class="form-control" placeholder="Nome">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">ENDEREÇO</label>
								ENDEREÇO<input type="text" name="endereco" id="name" class="form-control" placeholder="Endereço de Entrega">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">CEP</label>
								CEP<input type="text" name="cep" id="name" class="form-control" placeholder="CEP">
							</div>
							
						</div>



						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">CELULAR</label>
								CELULAR<input type="text" name="celular" id="subject" class="form-control" placeholder="Seu número">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">SEU PEDIDO</label>
								PEDIDO<textarea name="pedido" id="message" cols="30" rows="10" class="form-control" placeholder="Descreva seu pedido, marca de preferência, estabelecimento comercial, se houver."></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar" class="btn">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Informações de contato</h3>
						<ul>
							<li class="address">198 ######### <br> ########</li>
							<li class="phone"><a href="tel://1234567920">55 96 991000000</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">entregafacil@gmail.com</a></li>
							<li class="url"><a href="http://FreeHTML5.co">entregafacil.com</a></li>
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>

<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>QUEM <span class="footer-logo">SOMOS</span></h3>
						<p style="text-align: justify; text-indent: 15px;">A equipe EntregaFácil é uma empresa focada em um serviço otimizado de entrega de diversos produtos, tendo como diferencial a facilidade de funcionamento da logística.</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Termos de serviços</a></li>
							<li><a href="#">Política de Privacidade</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>ENTRAR EM CONTATO</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i style="background-color: inherit;" class="icon-phone"></i> 55 96 991000000</a></li>
							<li><a href="#"><i style="background-color: inherit;" class="icon-mail2"></i> entregafacil@gmail.com</a></li>
							<li><a href="#"><i style="background-color: inherit;" class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2018 EntreFácil</small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	
	</div>

	</div>
</footer>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i style="background-color:#FFA500; border: none; border-radius: 0%" class="icon-arrow-up"></i></a>
	</div>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

