<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">



		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>  id="px-offset-waypoint" >
		

		
		

			<!-- header -->
			<header class="header clear <?php the_field( 'logo_contrast');?>-logo" role="banner">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<a class="back-btn" href="">Back</a>
							</div>

							<div class="col-sm-4 logo-container">
								
								<a class="inactive logo" href="<?php echo home_url(); ?>">
									
									
								</a>
								
							</div>
							
							

							<div class="col-sm-4">
								<a class="active logo" href="<?php echo home_url(); ?>">
									
									
								</a>

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
						<div class="col-sm-4 image-area">
							<div class="video">
								<ul>
									<li class="active">
										<video autoplay muted loop playsinline>
										  <source src="/wp-content/themes/foundry-2019/assets/videos/placeholdervideo.mp4" type="video/mp4">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/placeholdervideo.ogg" type="video/ogg">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/placeholdervideo.webmhd.webm" type="video/webm">
										Your browser does not support the video tag.
										</video>
									</li>

									<li>
										<video autoplay muted loop playsinline>
										  <source src="/wp-content/themes/foundry-2019/assets/videos/abstract.mp4" type="video/mp4">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/abstract.mp4" type="video/ogg">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/abstract.webm" type="video/webm">
										Your browser does not support the video tag.
										</video>
									</li>

									<li>
										<video autoplay muted loop playsinline>
										  <source src="/wp-content/themes/foundry-2019/assets/videos/vr.mp4" type="video/mp4">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/vr.mp4" type="video/ogg">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/vr.webm" type="video/webm">
										Your browser does not support the video tag.
										</video>
									</li>

									<li>
										<video autoplay muted loop playsinline>
										  <source src="/wp-content/themes/foundry-2019/assets/videos/table.mp4" type="video/mp4">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/table.mp4" type="video/ogg">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/table.webm" type="video/webm">
										Your browser does not support the video tag.
										</video>
									</li>

									<li>
										<video autoplay muted loop playsinline>
										  <source src="/wp-content/themes/foundry-2019/assets/videos/man.mp4" type="video/mp4">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/man.mp4" type="video/ogg">
										  <source src="/wp-content/themes/foundry-2019/assets/videos/man.webm" type="video/webm">
										Your browser does not support the video tag.
										</video>
									</li>
								</ul>
								
								
							</div>
						</div>
						<div class="col-sm-4 top-nav">

							<nav class="nav" role="navigation">
								<div class="menu">
									<ul>
										<li class="page_item "><a href="/">Home</a></li>
										<li class="expandable clients"><button>Clients<span class="chevron"></span></button></li>
										<li class="expandable about"><button>About<span class="chevron"></span></button></li>
										<li class="page_item"><a href="/meet/">Meet</a></li>
										<!--<li class="page_item"><a href="/news-media/">News &amp; Media</a></li>-->
									</ul>
								</div>
							</nav>

						</div>

						<div class="col-sm-4 subnav-container">
							<div class="subnav">
								<div class="submenu">
									<ul class="about-sub-nav about">
										<li><a href="/about/story/">Story</a></li>
										<li><a href="/about/strategy/">Strategy</a></li>
										<li><a href="/about/design-thinking/">Design Thinking</a></li>
										<li><a href="/about/development/">Development</a></li>
									</ul>

									<ul class="clients-sub-nav clients">
										<li class="locked"><a href="/clients/atlassian/">Altir</a></li>
										<li><a href="/clients/alter-g/">Alter G</a></li>
										<li><a href="/clients/atlassian/">Atlassian</a></li>
										
										<li class="locked"><a href="/clients/bloom-labs/">Bloom Labs</a></li>
										<li class="locked"><a href="/clients/bloom-labs/">Career Fair+</a></li>
										<li class="locked"><a href="/clients/cerebri-ai/">Cerebri AI</a></li>
										<li class="locked"><a href="/clients/atlassian/">Code My Views</a></li>
										<li class="locked"><a href="/clients/grace-hill/">Grace Hill</a></li>
										<li class="locked"><a href="/clients/idealspot/">Idealspot</a></li>
										<li class="locked"><a href="/clients/heyl-group/">KW Heyl Group</a></li>
										<li class="locked"><a href="/clients/maxplay/">MaxPlay</a></li>
										<li class="locked"><a href="/clients/nokia-bell-labs/">Nokia Bell Labs</a></li>
										<li class="locked"><a href="/clients/twia/">TWIA</a></li>
										<li class="locked"><a href="/clients/valera-health/">Valera Health</a></li>
									</ul>
								</div>
							</div>
							<div class="bg"></div>
						</div>

						
					</div>
					<div class="row colophon">
						<div class="col-sm-4">
							
						</div>
						<div class="col-sm-4">
							<p><strong>P</strong> 512.123.1230 <br /><strong>M</strong> 2028 E Ben White Blvd Suite 240-3350 Austin, Texas 78741</p>
						</div>
						<div class="col-sm-4">
							<p>
							<a href=""><i class="fab fa-youtube"></i></a>
							<a href=""><i class="fab fa-instagram"></i></a>
							<a href=""><i class="fab fa-twitter"></i></a>
							<a href=""><i class="fab fa-linkedin"></i></a>
							<a href="mailto:info@foundryatx.com"><i class="fas fa-envelope"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<!-- /header -->

			<div class="wrapper <?php the_field( 'cover_type');?>">
