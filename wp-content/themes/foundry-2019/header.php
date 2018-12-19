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
	<body <?php body_class(); ?>  id="px-offset-waypoint">

		
		

			<!-- header -->
			<header class="header clear <?php the_field( 'logo_type');?>" role="banner">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<a class="back-btn" href="">Clients</a>
							</div>

							<div class="col-sm-4 logo-container">
								
								<a class="logo" href="<?php echo home_url(); ?>">
									
									
								</a>
								
							</div>
							
							

							<div class="col-sm-4">
								

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
										  <source src="/wp-content/themes/foundry-2019/assets/videos/placeholdervideo.webm" type="video/webm">
										Your browser does not support the video tag.
										</video>
									</li>

									<li>
										<video autoplay muted loop playsinline>
										  <source src="https://ak9.picdn.net/shutterstock/videos/24251279/preview/stock-footage-abstract-digital-background-made-of-different-shapes-with-hight-detailed-elements-rich-details-and.webm" type="video/mp4">
										  <source src="https://ak9.picdn.net/shutterstock/videos/24251279/preview/stock-footage-abstract-digital-background-made-of-different-shapes-with-hight-detailed-elements-rich-details-and.webm" type="video/ogg">
										  <source src="https://ak9.picdn.net/shutterstock/videos/24251279/preview/stock-footage-abstract-digital-background-made-of-different-shapes-with-hight-detailed-elements-rich-details-and.webm" type="video/webm">
										Your browser does not support the video tag.
										</video>
									</li>

									<li>
										<video autoplay muted loop playsinline>
										  <source src="https://ak6.picdn.net/shutterstock/videos/32430376/preview/stock-footage-virtual-human-head-d-motion-graphics.webm" type="video/mp4">
										  <source src="https://ak6.picdn.net/shutterstock/videos/32430376/preview/stock-footage-virtual-human-head-d-motion-graphics.webm" type="video/ogg">
										  <source src="https://ak6.picdn.net/shutterstock/videos/32430376/preview/stock-footage-virtual-human-head-d-motion-graphics.webm type="video/webm">
										Your browser does not support the video tag.
										</video>
									</li>

									<li>
										<video autoplay muted loop playsinline>
										  <source src="https://ak8.picdn.net/shutterstock/videos/22522198/preview/stock-footage-seven-stylish-diverse-people-lean-on-a-conference-table-while-energetically-discussing-daily.webm" type="video/mp4">
										  <source src="https://ak8.picdn.net/shutterstock/videos/22522198/preview/stock-footage-seven-stylish-diverse-people-lean-on-a-conference-table-while-energetically-discussing-daily.webm" type="video/ogg">
										  <source src="https://ak8.picdn.net/shutterstock/videos/22522198/preview/stock-footage-seven-stylish-diverse-people-lean-on-a-conference-table-while-energetically-discussing-daily.webm" type="video/webm">
										Your browser does not support the video tag.
										</video>
									</li>

									<li>
										<video autoplay muted loop playsinline>
										  <source src="https://ak0.picdn.net/shutterstock/videos/25834700/preview/stock-footage-casual-young-man-using-smartphone-in-a-car-he-is-checking-mails-chats-or-the-news-online.webm" type="video/mp4">
										  <source src="https://ak0.picdn.net/shutterstock/videos/25834700/preview/stock-footage-casual-young-man-using-smartphone-in-a-car-he-is-checking-mails-chats-or-the-news-online.webm" type="video/ogg">
										  <source src="https://ak0.picdn.net/shutterstock/videos/25834700/preview/stock-footage-casual-young-man-using-smartphone-in-a-car-he-is-checking-mails-chats-or-the-news-online.webm" type="video/webm">
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
										<li class="page_item"><a href="/news-media/">News &amp; Media</a></li>
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
										<li><a href="/about/design-sprints/">Design Sprints</a></li>
										<li><a href="/about/development/">Development</a></li>
										<li><a href="/about/collaborators/">Collaborators</a></li>
										<li><a href="/about/pricing/">Pricing</a></li>
									</ul>

									<ul class="clients-sub-nav clients">
										<li><a href="/clients/atlassian/">Altir</a></li>

										<li><a href="/clients/atlassian/">Atlassian</a></li>
										
										<li><a href="/clients/bloom-labs/">Bloom Labs</a></li>
										<li><a href="/clients/bloom-labs/">Career Fair+</a></li>
										<li><a href="/clients/atlassian/">Code My Views</a></li>
										<li><a href="/clients/grace-hill/">Grace Hill</a></li>
										<li><a href="/clients/idealspot/">Idealspot</a></li>
										<li><a href="/clients/heyl-group/">KW Heyl Group</a></li>
										<li><a href="/clients/maxplay/">MaxPlay</a></li>
										<li><a href="/clients/valera-health/">Valera Health</a></li>
										<hr />
										<li class="locked"><a href="/clients/alter-g/">Alter G</a></li>
										<li class="locked"><a href="/clients/cerebri-ai/">Cerebri AI</a></li>
										
										<li class="locked"><a href="/clients/nokie-bell-labs/">Nokia Bell Labs</a></li>
										<li class="locked"><a href="/clients/twia/">TWIA</a></li>
										
									</ul>
								</div>
							</div>
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

			<div class="wrapper">
