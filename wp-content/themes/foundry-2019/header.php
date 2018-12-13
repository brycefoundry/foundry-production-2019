<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>

		
		

			<!-- header -->
			<header class="header clear" role="banner">
					<div class="container">
						<div class="row">
							<div class="col">
								
							</div>
							
							

							<div class="col">
								<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									
								</a>
								</div>

								<button id="menu-btn">
								<span>Menu</span>
								</button>
							</div>
							
						</div>
						
					</div>
					<!-- logo -->
					
					

			</header>

			<div id="menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 image-area">left photo</div>
						<div class="col-sm-4 top-nav">

							<nav class="nav" role="navigation">
								<div class="menu">
									<ul>
										<li class="page_item page-item-16"><a href="/">Home</a></li>
										<li class="expandable page_item page-item-16"><a href="/clients/">Clients<span class="chevron"></span></a></li>
										<li class="expandable page_item page-item-16"><a href="/about/">About<span class="chevron"></span></a></li>
										<li class="page_item page-item-12"><a href="/meet/">Meet</a></li>
										<li class="page_item page-item-14"><a href="/news-media/">News &amp; Media</a></li>
									</ul>
								</div>
							</nav>

						</div>

						<div class="col-sm-4 subnav-container">
							<div class="subnav">
								<div class="submenu">
									<ul class="about-sub-nav">
										<li><a href="">My Story</a></li>
										<li><a href="">Strategy</a></li>
										<li><a href="">Design Sprints</a></li>
										<li><a href="">Development</a></li>
										<li><a href="">Collaborators</a></li>
										<li><a href="">Pricing</a></li>
									</ul>

									<ul class="clients-sub-nav active">
										<li><a href="">Atlassian</a></li>
										<li><a href="">Alter G</a></li>
										<li><a href="">Bloom Labs</a></li>
										<li><a href="">Grace Hill</a></li>
										<li><a href="">Idealspot</a></li>
										<li><a href="">KW Heyl Group</a></li>
										<li><a href="">MaxPlay</a></li>
										<li><a href="">Nokia Bell Labs</a></li>
										<li><a href="">Valera Health</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- /header -->

			<div class="wrapper">
