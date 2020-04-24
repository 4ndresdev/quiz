<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76037200-4"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-76037200-4');
	</script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz</title>
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap" rel="stylesheet">
	<link href="<?= base_url('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link href="<?= base_url('css/generic.css') ?>" rel="stylesheet">
	<link href="<?= base_url('css/app.min.1.css') ?>" rel="stylesheet">
	<link href="<?= base_url('css/app.min.2.css') ?>" rel="stylesheet">
	<link href="<?= base_url('css/home.css') ?>" rel="stylesheet">
</head>

<body>

	<!-- Loader -->
	<img class="loader" src="<?= base_url('media/loader.gif') ?>" width="100px" alt="">

	<!-- Subir -->
	<div class="cicle-subir animated">
		<i class="zmdi zmdi-chevron-up zmdi-hc-fw"></i>
	</div>



	<!-- Container -->
	<div class="container-fluid p-0">

		<!-- Nav -->
		<nav class="p-15">
			<div class="logo-container">
				<div class="logo middle">
					<i class="zmdi zmdi-pin-help zmdi-hc-fw"></i>
				</div>
				<h3 class="m-0 di-block middle m-l-10">Quiz.io</h3>
			</div>
		</nav>

		<!-- Header -->
		<header>

			<h1 class="bold">Descubre <br> tu personalidad</h1>
			<button class="btn-facebook brd-2"> <i class="zmdi zmdi-facebook zmdi-hc-fw"></i> Continuar con facebook</button>

			<div class="circle-icon-container d-flex justify-content-center w-100">
				<div class="circle-icon animated infinite bounce delay-1s">
					<i class="zmdi zmdi-chevron-down zmdi-hc-fw"></i>
				</div>
			</div>

			<!-- Wave -->
			<div style="height: 200px; width: 100%; display: block;">
				<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
					<path d="M0.00,49.99 C157.63,180.09 325.24,-12.33 500.75,2.47 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #F6D186;"></path>
				</svg>
			</div>

			<div class="wave-second" style="height: 200px; width: 100%; transform: rotate(180deg); display: block; margin-top: -5px;">
				<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
					<path d="M0.00,49.99 C157.63,180.09 325.24,-12.33 500.75,2.47 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #F6D186;"></path>
				</svg>
			</div>

		</header>



		<!-- title-center-->
		<div class="d-block p-30 text-center">
			<h1 class="bold">¿Qué tipo de personalidad eres? </h1>
			<div class="under-line"></div>
		</div>
		<section class="section-personalities p-30">
			<!-- Figura 1 -->
			<img class="figura-1" src="<?= base_url('media/figura-1.svg') ?>" alt="Figura 1">

			<div class="row d-flex justify-content-center">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Arquitecto.svg') ?>" width="150px" height="150px"  alt="arquitecto">
							</div>
							<p class="bold m-t-25">Arquitecto</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Pensador.svg') ?>" width="150px" height="150px" alt="pensador">
							</div>
							<p class="bold m-t-25">Pensador</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row d-flex justify-content-center">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Comandante.svg') ?>" width="150px" height="150px" alt="comandante">
							</div>
							<p class="bold m-t-25">Comandante</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Polémico.svg') ?>" width="150px" height="150px" alt="polemico">
							</div>
							<p class="bold m-t-25">Polemico</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row d-flex justify-content-center">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Abogado.svg') ?>" width="150px" height="150px" alt="pensador">
							</div>
							<p class="bold m-t-25">Abogado</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Mediador.svg') ?>" width="150px" height="150px" alt="mediador">
							</div>
							<p class="bold m-t-25">Mediador</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Bondadoso.svg') ?>" width="150px" height="150px" alt="bondadoso">
							</div>
							<p class="bold m-t-25">Bondadoso</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Campeón.svg') ?>" width="150px" height="150px" alt="campeon">
							</div>
							<p class="bold m-t-25">Campeón</p>
						</div>
					</div>
				</div> 
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Protector.svg') ?>" width="150px" height="150px" alt="protector">
							</div>
							<p class="bold m-t-25">Protector</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Director.svg') ?>" width="150px" height="150px" alt="director">
							</div>
							<p class="bold m-t-25">Director</p>
						</div>
					</div>
				</div> 
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Cuidador.svg') ?>" width="150px" height="150px" alt="dador">
							</div>
							<p class="bold m-t-25">Cuidador</p>
						</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Artesano.svg') ?>" width="150px" height="150px" alt="artesano">
							</div>
							<p class="bold m-t-25">Artesano</p>
						</div>
					</div>
				</div> 
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Artista.svg') ?>" width="150px" height="150px" alt="artista">
							</div>
							<p class="bold m-t-25">Artista</p>
						</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Inspector.svg') ?>" width="150px" height="150px" alt="inspector">
							</div>
							<p class="bold m-t-25">Inspector</Inp></p>
						</div>
					</div>
				</div> 
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Persuador.svg') ?>" width="100px" alt="persuador">
							</div>
							<p class="bold m-t-25">Persuador</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="card z-depth-1 card-personal">
						<div class="card-body card-padding">
							<div class="w-100 d-flex justify-content-center">
								<img src="<?= base_url('media/archetype/Ejecutor.svg') ?>" width="100px" alt="Ejecutors">
							</div>
							<p class="bold m-t-25">Ejecutor</p>
						</div>
					</div>
				</div>
			</div>
			
		</section>



		<section class="section-share">

			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12 section-share-fondo p-0">
					<div class=" section-share-img">
						<img src="<?= base_url('media/share.svg') ?>" width="200px" alt="Share">
					</div>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12 section-share-information p-30">
					<h1 class="bold">Comparte la experiencia con <br> tus amigos</h1>
					<img src="<?= base_url('media/iconos/profile-1.svg') ?>" width="40px" alt="Profile">
					<img src="<?= base_url('media/iconos/profile-2.svg') ?>" width="40px" alt="Profile">
				</div>
			</div>

		</section>


		<footer class="p-20">
			<p class="m-0">Derechos reservados</p>
		</footer>


	</div>



	<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../vendors/bower_components/Waves/dist/waves.min.js"></script>
	<script src="../vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
	<script src="../js/functions.js"></script>

	<script>
		$(document).ready(function() {

			let url = '<?= base_url() ?>';

			$('.container-fluid').fadeIn('slow');
			$('.loader').fadeOut('slow');

			$('.btn-facebook').click(function() {
				checkLoginState();
			});

			$('.cicle-subir').hide();

			$(window).scroll(function() {
				if ($(this).scrollTop() > 200) {
					$('.cicle-subir').show();
					$('.cicle-subir').addClass('bounceIn');
				} else {
					$('.cicle-subir').removeClass('bounceIn');
					$('.cicle-subir').hide();
				}
			});

			$('.cicle-subir').click(function() {
				$('html, body').animate({
					scrollTop: 0
				}, 600);
			});


			function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
				if (response.status === 'connected') { // Logged into your webpage and Facebook.

					apiGraph(response.authResponse.userID);

				} else { // Not logged into your webpage or we are unable to tell.
					FB.login(function(response) {
						if (response.status === 'connected') {
							apiGraph(response.authResponse.userID);
						} else {
							// The person is not logged into your webpage or we are unable to tell. 
						}
					}, {
						scope: 'public_profile, email'
					});
				}
			}

			function checkLoginState() { // Called when a person is finished with the Login Button.
				FB.getLoginStatus(function(response) { // See the onlogin handler						
					statusChangeCallback(response);
				});
			}


			window.fbAsyncInit = function() {
				FB.init({
					appId: '794359310972170',
					cookie: true, // Enable cookies to allow the server to access the session.
					xfbml: true, // Parse social plugins on this webpage.
					version: 'v6.0' // Use this Graph API version for this call.
				});

			};


			(function(d, s, id) { // Load the SDK asynchronously
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s);
				js.id = id;
				js.src = "https://connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));


			function apiGraph(userID) {
				FB.api(
					"/me", {
						'fields': ['picture', 'name', 'email']
					},
					function(response) {
						if (response && !response.error) {

							localStorage.setItem('user_id', response.id);
							localStorage.setItem('img_perfil', response.picture.data.url);
							localStorage.setItem('name', response.name);
							localStorage.setItem('email', response.email);
							//Into app
							window.location.href = url + 'C_home/quiz';

						}
					}
				);
			}


		});
	</script>

</body>

</html>