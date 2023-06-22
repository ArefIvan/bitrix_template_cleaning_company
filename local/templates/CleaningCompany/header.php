<?

use Bitrix\Main\Page\Asset;

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<? 
		Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
	
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");

		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");

		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/flaticon.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

		Asset::getInstance()->addCss("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-migrate-3.0.1.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/popper.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.easing.1.3.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.waypoints.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.stellar.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/animateNumber.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.magnific-popup.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/scrollax.min.js');
		// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . 'js/google-map.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');

	?>
  </head>
  <body>
  	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
					<div class="col-12 col-md d-flex align-items-center">
						<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
					</div>
					<div class="col-12 col-md d-flex justify-content-md-end">
						<div class="social-media">
							<p class="mb-0 d-flex">
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
							</p>
						</div>
					</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Cleaning<span>company</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="portfolio.html" class="nav-link">Portfolio</a></li>
					<li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
    <!-- END nav -->
	
						