<!DOCTYPE HTML>
<?php
session_start();
?>
<?php 
include("insert_pedido.php");
include ("cadastro.php");?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EntregaFácil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Entrega rapida de produtos" />
	<meta name="keywords" content="entrega, produtos, alimentos, mercadoria, frete," />
	<meta name="author" content="Cleyton Amanajas, Lidiane Neves, Orcicley Junior" />
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="141092798675-csfqjmic1j6lu0jbac3kvtj33g99pdkr.apps.googleusercontent.com">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<style type="text/css">
		
		.material-icons{
			background-color: #fff;
			border: 1px solid #FFA500;
			border-radius: 20%;
			

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
			text-align: justify;
		}
		.desejo{
			text-align: center;
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
			<!-- menu -->
			<nav class="gtco-nav" role="navigation">
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
										<li><a href="#ali">Alimentos e Bebidas</a></li>
										<li><a href="#ali">Bebês e Criaças</a></li>
										<li><a href="#ali">Autopeças</a></li>
										<li><a href="##ali">Contrução e Reforma</a></li>
										
										<li><a href="#mat">Materias de Limpeza</a></li>
										<li><a href="#ute">Utensílios Domésticos</a></li>
										<li><a href="#sau">Saúde</a></li>
										<li><a href="#pap">Papelarias e Livrarias</a></li>

									</ul>
								</li>
								<li><a href="contact.php">PEDIDOS</a></li>
								<li class="btn-cta"><a href="#login"><span>Cadastre-se</span></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</nav>
			<!-- banner -->
			<header id="gtco-header"  role="banner" style="background-image: url(images/b1.png)">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-mt-15em">
								<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
									
									<h1>EntregaFácil, com ele tudo fica mais fácil!</h1>	
								</div>
								<!-- formulario de cadastro e login -->
								<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight" id="login">
									<div class="form-wrap">
										<div class="tab" >
											<ul class="tab-menu">
												<li class="active gtco-first"><a href="#" data-tab="signup" style="color: #FFA500;">Cadastre-se</a></li>
												<li class="gtco-second"><a href="#" data-tab="login"  style="color: #FFA500;">Login</a></li>
											</ul>
											<div class="tab-content">
												<div class="tab-content-inner active" data-content="signup">

													<form action="#" method="post">
														<div class="row form-group">
															<div class="col-md-12">

																

																<label for="username">E-mail</label>
																<input type="text" name="email" class="form-control" required>
															</div>
														</div>
														<div class="row form-group">
															<div class="col-md-12">
																<label for="password">Senha</label>
																<input type="password" name="senha" class="form-control" required>
															</div>
														</div>
														
														<div class="row form-group">
															<div class="col-md-12">
																<label for="password2">Repita Senha</label>
																<input type="password" name="resenha" class="form-control" required>
															</div>
														</div>

														<div class="row form-group">
															<div class="col-md-12">
																<input type="submit" class="btn" value="cadastrar">
															</div>
														</div>
													</form>	
												</div>

												<div class="tab-content-inner" data-content="login" >
													<form action="login_1.php" method="post">
														<div class="row form-group">
															<div class="col-md-12">
																<label for="username">E-mail</label>
																<input type="text" name="email" class="form-control"  required>
															</div>
														</div>
														<div class="row form-group">
															<div class="col-md-12">
																<label for="password">Senha</label>
																<input type="password" name="senha" class="form-control"  required>
															</div>
														</div>
														
														<div class="row form-group">

															<div class="col-md-12">
																<input type="submit" class="btn" name="btnlogin" value="Login">
															</div>
														</div>
													</form>	
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</header>
			<!-- explicação das categorias -->
			<div id="gtco-features" class="border-bottom">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
							<h2>O que Deseja? </h2>
							<p class="desejo">Aqui estão as categorias dos produtos que fazemos entrega, escolha a categoria que desejar.</p>
						</div>
						
					</div>
					<!-- categorias -->
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="material-icons">&#xE56C;</i>
									
								</span>
								<h3 style="color: #FFA500">Alimentos e Bebidas</h3>
								<button type="button" class="btn" name="Alimentos" data-toggle="modal" data-target="#exampleModal"> Faça seu pedido</button>
								
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="material-icons" style="text-decoration:">&#xEB42;</i>
								</span>
								<h3 style="color: #FFA500">Bebês e Crianças</h3>
								
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" name="bebes"> Faça seu pedido</button>
								
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="material-icons" style="text-decoration: none;">&#xE8B8;</i>
								</span>
								<h3 style="color: #FFA500">Autopeças</h3>
								
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" name="autopecas"> Faça seu pedido</button>
								
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="material-icons" style="text-decoration: none;">&#xE869;</i>
								</span>
								<h3 style="color: #FFA500">Construção e Reforma</h3>
								
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" name="construcao"> Faça seu pedido</button>
								
							</div>
						</div>
						

						<div class="col-md-3 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="material-icons" style="text-decoration: none;">&#xE54A;</i>
								</span>
								<h3 style="color: #FFA500">Materias de Limpeza</h3>
								
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" name="limpeza"> Faça seu pedido</button>
								
							</div>
						</div>
						<br>
						<div class="col-md-3 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="material-icons" style="text-decoration: none;">&#xE16B;</i>
								</span>
								<h3 style="color: #FFA500">Utensílios Domésticos</h3>
								
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" name="utensilios"> Faça seu pedido</button>
								
							</div>
						</div>
						<br>
						<div class="col-md-3 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="material-icons"><a href="" style="text-decoration: none;color: inherit;">&#xE63F;</a></i>
								</span>
								<h3 style="color: #FFA500">Saúde</h3>
								
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" name="saude"> Faça seu pedido</button>
								
							</div>
						</div>
						<br>
						<div class="col-md-3 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="material-icons" style="text-decoration: none;">&#xE54B;</i>
								</span>
								<h3 style="color: #FFA500">Papelarias e Livrarias</h3>
								
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" name="papelarias"> Faça seu pedido</button>
								
							</div>
						</div>
						<br>

					</div>
				</div>
			</div>
			<!-- Avaliação do sistema -->
			<div id="gtco-features" class="border-bottom">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
							<h3>Avalie o Nosso Serviço</h3>
							<form method="POST" action="processa.php" enctype="multipart/form-data">
								<div class="estrelas">
									<input type="radio" id="vazio" name="estrela" value="" checked>
									
									<label for="estrela_um"><i class="fa"></i></label>
									<input type="radio" id="estrela_um" name="estrela" value="1">
									
									<label for="estrela_dois"><i class="fa"></i></label>
									<input type="radio" id="estrela_dois" name="estrela" value="2">
									
									<label for="estrela_tres"><i class="fa"></i></label>
									<input type="radio" id="estrela_tres" name="estrela" value="3">
									
									<label for="estrela_quatro"><i class="fa"></i></label>
									<input type="radio" id="estrela_quatro" name="estrela" value="4">
									
									<label for="estrela_cinco"><i class="fa"></i></label>
									<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
									
									<input type="submit" value="Avaliar" class="btn">
									<?php
									if(isset($_SESSION['msg'])){
										echo $_SESSION['msg']."<br><br>";
										unset($_SESSION['msg']);
									}
									?>
								</div>
							</form>
						</div>
						
					</div>
					<!-- rodapé -->
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
				<button type="button" class="btn" name="Alimentos" data-toggle="modal" data-target="#modallogin"> Faça seu pedido</button>
				
			</footer>
			<div class="gototop js-top">
				<a href="#" class="js-gotop"><i style="background-color:#FFA500; border: none; border-radius: 0%" class="icon-arrow-up"></i></a>
			</div>

			<!-- Large modal -->
			
			<div class="modal"  id="exampleModal" tabindex="2" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">FAÇA SEU PEDIDO</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" style="font-weight: bold; font-size: 30px; position: absolute; right: 20px; bottom: 770px;">X</span>
							</button>
						</div>
						<div class="modal-body">
							
							<form  method="post" action="pedido_ok.php">
								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="name">NOME</label>
										SEU NOME<input type="text" name="nome" class="form-control" placeholder="Nome" required>
									</div>
									
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="name">ENDEREÇO</label>
										ENDEREÇO<input type="text" name="endereco" class="form-control" placeholder="Endereço de Entrega" required>
									</div>
									
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="name">CEP</label>
										CEP<input type="text" name="cep" class="form-control" placeholder="CEP"required>
									</div>
									
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="subject">CELULAR</label>
										CELULAR<input type="text" name="celular" class="form-control" placeholder="Seu número" required>
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="message">SEU PEDIDO</label>
										PEDIDO<textarea name="pedido" id="message" cols="30" rows="10" class="form-control" placeholder="Descreva seu pedido, marca de preferência, estabelecimento comercial, se houver."></textarea>
									</div>
								</div>
								
								<div class="modal-footer">
									<div class="form-group">
										<input type="submit" value="Enviar" class="btn" name="btn">
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					
				</form>	
			</div>
			




			<div class="modal"  id="modallogin" tabindex="2" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">LOGIN</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" style="font-weight: bold; font-size: 30px; position: absolute; right: 20px; bottom: 770px;">X</span>
							</button>
						</div>
						<div class="modal-body">
							
							<!-- formulario de cadastro e login -->
							
							<form action="login_1.php" method="post">
								<div class="row form-group">
									<div class="col-md-12">
										<label for="username">E-mail</label>
										<input type="text" name="emaillogin" class=" form-control"  required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<label for="password">Senha</label>
										<input type="password" name="senhalogin" class="form-control"  required>
									</div>
								</div>
								
								<div class="row form-group">

									<div class="col-md-12">
										<input type="submit" class="btn" name="btnlogin" value="Login">
									</div>
								</div>
							</form>	
						</div>

					</div>
				</div>
			</div>
		</div>
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

