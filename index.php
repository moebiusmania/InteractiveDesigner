<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

		<!-- Metadati -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Salvatore Laisa">
		<meta name="description" content="Il sito ufficiale di Salvatore Laisa - Interactive Designer">
		<meta name="keywords" content="salvatore, laisa, webdesign, interactive, graphic, design, web, siti, realizzazione, progettazione, milano, pavia, docente, blogger">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
		<meta charset="<?php bloginfo('charset'); ?>" >

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,700,300' rel='stylesheet' type='text/css'>

		<!-- CSS -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<!-- Html5 Shiv -->
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicon -->
		<link rel="icon" href="http://www.salvatorelaisa.net/favicon.ico" type="image/png" >

		<!-- WordPress -->
		<?php wp_head(); ?>

		<!-- LESS -->
		<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style.less">
		<script src="<?php bloginfo('template_url'); ?>/js/less-1.3.3.min.js"></script>

		<!-- Google Analytics -->

	</head>
	<body>

		<section id="principale" class="container">
			<header class="row">
				<hgroup class="span6">
					<h1><a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/img/sl.svg" 
						alt="<?php bloginfo('name'); ?>">
					</a></h1>
				</hgroup>
				<nav class="span6">
					<ul class="nav nav-pills">
						<li><a href=""><i class="icon-book"></i> Blog</a></li>
						<li><a href=""><i class="icon-user"></i> About</a></li>
						<li><a href=""><i class="icon-pencil"></i> Portfolio</a></li>
						<li><a href=""><i class="icon-envelope"></i> Contatti</a></li>
					</ul>
				</nav>
			</header>
			<section id="presentazione" class="row">
				<div class="span12">
					<article class="box">
						<h2>Web / UI / Front End Designer</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<div class="foto span2"></div>
					</article>
				</div>
			</section>
			<section id="skills" class="row">
				<a href="">
					<section class="span4">
						<div class="box">
							<h3>Test</h3>
							<p>prova</p>
							<i class="icon-off"></i>
						</div>
					</section>
				</a>

				<a href="">
					<section class="span4">
						<div class="box">
							<h3>Test</h3>
							<p>prova</p>
							<i class="icon-off"></i>
						</div>
					</section>
				</a>

				<a href="">
					<section class="span4">
						<div class="box">
							<h3>Test</h3>
							<p>prova</p>
							<i class="icon-off"></i>
						</div>
					</section>
				</a>
			</section>
			<section id="cerca" class="row">
				<div class="span12">
					<form action="" id="cerca" class="box form-inline">
						<label>Se stavi cercando qualcosa di preciso</label>
						<input type="text" placeholder="prova a digitarlo qui" >
						<button class="btn btn-primary">
							<i class="icon-white icon-search"></i>
							Cerca
						</button>
					</form>
				</div>
			</section>
		</section>

		<section id="fondo">
			<footer class="container">
				<section class="row">
					<div class="span4">
						<h4>Disclaimer tecnologico</h4>
						<p>Se stai vedendo questo sito in modo incasinato stai usando un browser vecchio, molto vecchio e anche insicuro.
						Nel realizzare questo sito ho optato per un utilizzo massiccio delle <a href="http://it.wikipedia.org/wiki/HTML5" target="_blank">ultime tecnologie web</a>, cercando un compromesso tra retro-compatibilita' e nuove tecniche, scegliendo deliberatamente di "escludere" alcuni browser.</p>
						<p>Tuttavia nel mio lavoro quotidiano la compatibilita' dei miei siti su tutti i browser e' e rimmarra' una <strong>priorita'</strong>!</p>
					</div>
					<div class="span4">
						<h4>The social networks</h4>
						<ul class="unstyled">
							<li><a href=""><i class="icon-facebook-sign"></i> Facebook</a></li>
							<li><a href=""><i class="icon-twitter-sign"></i> Twitter</a></li>
							<li><a href=""><i class="icon-google-plus-sign"></i> Google+</a></li>
							<li><a href=""><i class="icon-flickr"></i> Flickr</a></li>
							<li><a href=""><i class="icon-instagram"></i> Instagram</a></li>
							<li><a href=""><i class="icon-linkedin-sign"></i> LinkedIn</a></li>
							<li><a href=""><i class="icon-foursquare"></i> Foursquare</a></li>
							<li><a href=""><i class="icon-github-alt"></i> Github</a></li>
							
						</ul>
					</div>
					<div class="span4">
						<h4>Contatto rapido</h4>
						<form action="">
							<label>Chi sei?</label>
							<input type="text" placeholder="Sig Mario Rossi" class="input-block-level" required>
							<label>Email di contatto</label>
							<input type="email" placeholder="prova@indirizzo.it" class="input-block-level" required>
							<label>Messaggio (breve)</label>
							<textarea class="input-block-level" required></textarea>	
							<button class="btn btn-primary btn-block">
								<i class="icon-white icon-envelope-alt"></i>
								Invia messaggio!
							</button>
						</form>
					</div>
				</section>
			</footer>
		</section>

	</body>

	<!-- JS -->
	<?php wp_footer(); ?>
	<script src="js/jquery-2.0.2.min.js"></script>
	<script src="js/sl.3.0.js"></script>

</html>