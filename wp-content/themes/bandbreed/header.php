<!doctype html>
<!--[if IEMobile 7 ]><html class="no-js iem7" lang="en"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<title>Bandbreed Mobile</title>
	<meta name="description" content="Mobile website voor Bandbreed online reclamebureau">

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width">

	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/h/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/m/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" href="images/l/apple-touch-icon-precomposed.png">
	<link rel="shortcut icon" href="images/l/apple-touch-icon.png">
	<meta http-equiv="cleartype" content="on">

	<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php bloginfo("stylesheet_url");?>" />
		
	<!-- Pingback -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
	<!-- Bringing old browsers up to date -->
			<script src="<?php bloginfo("template_url");?>/scripts/libs/modernizr-2.0.6.min.js"></script>
	
</head>

<body>

	<div id="sitewrapper">
	
		<header>
			<div id="headerwrapper" role="banner">
				<div id="logowrapper">
					<a href="<?php echo home_url( '/' ); ?>" title="Terug naar de <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> Homepage" rel="home">
						<img src="<?php bloginfo("template_url");?>/images/logo/logo.png" alt="bandbreed online reclamebureau utrecht" />
					</a>
				</div><!-- End logowrapper -->
				<nav id="navwrapper" role="navigation">
					<?php wp_nav_menu( array('menu' => 'hoofdmenu' )); ?>
				</nav><!-- End nav -->
			</div><!-- End headerwrapper -->
		</header>
		
		<div id="bodywrapper">