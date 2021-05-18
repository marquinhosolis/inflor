<!doctype html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="PT-BR">
		<meta content="en-US" http-equiv="content-language">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/hamburgers.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/jquery.flipster.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
		<?php wp_head(); ?> 
	</head>

	<body>
<nav class="mobileNav">
	<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
	<ul class="mobileNavExtraLinks">
		<li>
			<a href="tel:<?php theme_variables('phone_US'); ?>"><?php theme_variables('phone_US'); ?></a>
		</li>
		<li>
			<a href="<?php echo site_url('/request-a-demo/'); ?>" class="mobileNavSignInLink">Request a demo</a>
		</li>
		<div class="socialLinks">
			<a href="<?php theme_variables('facebook'); ?>" target="_blank">
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
			</a>
			<a href="<?php theme_variables('linkedin'); ?>" target="_blank">
				<i class="fa fa-linkedin-square" aria-hidden="true"></i>
			</a>
			<!-- <a href="<?php theme_variables('twitter'); ?>" target="_blank">
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
			</a>
			<a href="<?php theme_variables('instagram'); ?>" target="_blank">
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</a>
			<a href="<?php theme_variables('youtube'); ?>" target="_blank">
				<i class="fa fa-youtube-play" aria-hidden="true"></i>
			</a> -->
		</div>
	</ul>
</nav>
<header>
	<div class="fixedMenu">
		<div class="container">
			<div class="fixedMenuLogo">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inflor-logo-white.png" alt="">
				</a>
			</div>
			<div class="hamburger hamburger--squeeze">
				<div class="hamburger-box">
				<div class="hamburger-inner"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="desktopMenu">
		<div class="container">
			<div class="desktopMenuLogo">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inflor-logo.png" alt="">
				</a>
			</div>
			<nav class="desktopNav">
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
				<ul>
					<li>
						<a href="<?php echo site_url('/request-a-demo/'); ?>" class="btn btn-default">Request a demo </a>
					</li>
					<li>
						<a href="tel:<?php theme_variables('phone_US'); ?>"><?php theme_variables('phone_US'); ?></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="desktopMenu desktopMenu-fixed">
		<div class="container">
			<div class="desktopMenuLogo">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inflor-logo-white.png" alt="">
				</a>
			</div>
			<nav class="desktopNav">
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
				<ul>
					<li>
						<a href="<?php echo site_url('/request-a-demo/'); ?>" class="btn btn-default">Request a demo </a>
					</li>
					<li>
						<a href="tel:<?php theme_variables('phone_US'); ?>"><?php theme_variables('phone_US'); ?></a>
					</li>
					
				</ul>
			</nav>
		</div>
	</div>
</header>
	