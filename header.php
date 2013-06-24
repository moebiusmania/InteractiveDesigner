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
		<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/style.less">
		<script src="<?php bloginfo('template_url'); ?>/less/less-1.3.3.min.js"></script>

		<!-- Google Analytics -->

	</head>
	<body>

		<!-- Blocco principale -->
		<section id="principale" class="container">
			<header class="row">
				<!-- Intestazione -->
				<hgroup class="span6">
					<h1><a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/img/sl.svg" 
						alt="<?php bloginfo('name'); ?>">
					</a></h1>
				</hgroup>

				<!-- Navigazione -->
				<!-- <nav class="span6">
					<ul class="nav nav-pills">
						<li><a href=""><i class="icon-book"></i> Blog</a></li>
						<li><a href=""><i class="icon-user"></i> About</a></li>
						<li><a href=""><i class="icon-pencil"></i> Portfolio</a></li>
						<li><a href=""><i class="icon-envelope"></i> Contatti</a></li>
					</ul>
				</nav> -->

				<?php wp_nav_menu(array(
					'theme_location' => 'principale',
					'container' => 'nav',
					'container_class' => 'span6',
					'menu_class' => 'nav nav-pills'
				)) ?>

			</header>