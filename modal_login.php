<!-- Large modal -->
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>

			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<!-- gmail login -->
   

		</head>
		<body>


		<button type="button" class="btn" name="Alimentos" data-toggle="modal" data-target="#exampleModal"> Faça seu pedido</button>
		
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
		