<!DOCTYPE html>
<html>
<head>
	<!-- enable zooming 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	//-->

	<!-- disable zooming //-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>Strapless</title>

	<!-- stylesheet //-->
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/strapless.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/owl-carousel.css">

	<!-- favicon //-->
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/ico/favicon.ico" type="image/x-icon">

	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_url') ?>/assets/js/html5shiv/html5shiv.js"></script>
		<script src="<?php bloginfo('template_url') ?>/assets/js/respondjs/respond.min.js"></script>
	<![endif]-->
</head>
<body class="l-body">

	<header class="l-header">
		<section class="header-section" id="home">
			<div class="inner-section container">
				<h1>Wij zijn LittleBigAgency</h1>
				<!-- <img class="branding-logo" src="<?php bloginfo('template_url'); ?>/assets/img/layout/header/littlebigagency-logo-big.png" alt="lba logo big" title="LittleBigAgency | We design, We code, We create clean and responsive websites" /> -->
				<h2>Wij creeren simpele, responsive, websites...</h2>
			</a>
		</section><!--// .branding-section -->

		<div id="nav" class="navbar-static-top">
			<nav class="navmore visible-ty visible-xs" role="navigation">
				<ul class="nav navbar-nav">
					<li class="dropdown">
			  			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  				<i class="glyphicon glyphicon-align-justify"></i>
			  			</a>
						<ul class="dropdown-menu pull-right" role="menu">
							<li class="visible-ty">
								<a href="#portfolio">portfolio</a>
							</li>
							<li class="visible-xs">
								<a href="#">services</a>
							</li>
							<li class="visible-xs">
								<a href="#">testimonials</a>
							</li>
						</ul>
					</li>
				</ul><!--// .navbar-more -->
			</nav>
			
			<nav class="navbar" role="navigation">
				<ul class="nav navbar-nav">
					<li class="branding">
						<a href="#home">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/layout/header/littlebigagency-logo-small.png" title="littlebigagency | webdevelopment" alt="lba logo small" />
						</a>
					</li>
					<li class="iconic">
						<a href="#home">
							<i class="fa fa-home"></i> 
							<span class="hidden-ty hidden-xs">home</span>
						</a>
					</li>
					<li>
						<a href="#about">about</a>
					</li>
					<li class="hidden-ty">
						<a href="#portfolio">portfolio</a>
					</li>
					<li class="hidden-xs">
						<a href="#">services</a>
					</li>
					<li class="hidden-xs">
						<a href="#">testimonials</a>
					</li>
					<li>
						<a href="#">contact</a>
					</li>
				</ul><!--// .navbar-nav -->
			</nav>
		</div><!--// #nav -->
	</header>

	<div class="l-content container">
		<div class="row">
			<section class="content-section col-xs-12" id="about">	
				<header>
					<h2>
						<span class="t-tertiary-background-color">The story of LittleBigAgency</span>
					</h2>
					<h3>whats in the name...</h3>
				</header>
				<div class="l-align-txt-center">
					<p>LittleBigAgency was founded by Marnix Harderwijk from the Netherlands, in 2009. His vision is to make the internet a better place. Not only for developers and designers, but especially for the people that use the internet worldwide.</p>

					<p>With the right techniques LittleBigAgency wants to make websites understandable for every age and build digital products that contribute to this universe.</p>

					<p>We design, code and create websites for small to large business's on planet earth...</p>
				</div>
			</section>
		</div>
	</div>	

	<div class="container-fluid t-primary-background-color">
		<section class="content-section col-xs-12" id="services">
			<header>
				<h2>
					<span class="t-primary-background-color">Onze diensten</span>
				</h2>
				<h3>off with a good start...</h3>
			</header>
			<div class="container">
				<div class="row">
					<article class="col-xs-12 col-sm-4">
						<figure>
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/content/services/graph.jpg" title="" alt="" />
							</a>
							<figcaption>
								<h4>elegant design</h4>
							</figcaption>
						</figure>
					</article>


					<article class="col-xs-12 col-sm-4">
						<figure>
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/content/services/clockie.jpg" title="" alt="" />
							</a>
							<figcaption>
								<h4>efficiente code</h4>
							</figcaption>
						</figure>
					</article>


					<article class="col-xs-12 col-sm-4">
						<figure>
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/content/services/cloud_app.jpg" title="" alt="" />
							</a>
							<figcaption>
								<h4>google optimalisatie</h4>
							</figcaption>
						</figure>
					</article>
				</div>
			</div>
		</section>
	</div>

	<div class="container parralax">
		<section class="content-section col-xs-12" id="portfolio">
			<div id="theme-carousel" class="owl-carousel owl-theme">
				<div class="owl-wrapper-outer">
					<div class="owl-wrapper grabbing">
						<div class="owl-item">
							<div class="owl-item-inner">
								<a href="themes.html">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/content/services/graph.jpg" alt="designova">
								</a>
							</div>
						</div>
						<div class="owl-item">
							<div class="owl-item-inner">
								<a href="themes.html">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/content/services/clockie.jpg" alt="designova">
								</a>
							</div>
						</div>
						<div class="owl-item">
							<div class="owl-item-inner">
								<a href="themes.html">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/content/services/graph.jpg" alt="designova">
								</a>
							</div>
						</div>
						<div class="owl-item">
							<div class="owl-item-inner">
								<a href="themes.html">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/content/services/clockie.jpg" alt="designova">
								</a>
							</div>
						</div>
					</div>
				</div>
		
				<div class="owl-controls clickable">
					<div class="owl-pagination">
						<div class="owl-page active">
							<span class=""></span>
						</div>
						<div class="owl-page">
							<span class=""></span>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<footer class="l-footer">
		footer
	</footer>

	<script src="<?php bloginfo('template_url') ?>/assets/js/jquery/jquery-2.1.1.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url') ?>/assets/js/jquery/jQuery.strapscroll.js"></script>
	<script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php bloginfo('template_url') ?>/assets/js/owl-carousel/owl-carousel.js"></script>
	<script src="<?php bloginfo('template_url') ?>/assets/js/main.js"></script>
</body>
</html>