<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />
	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	<!--  iOS Web App Support -->
	<!-- Icons -->

	<!-- iOS 7 iPad (retina) -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/Bording-RetinaIcon152.png" sizes="152x152" rel="apple-touch-icon">

	<!-- iOS 6 iPad (retina) -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/Bording-RetinaIcon120.png" sizes="144x144" rel="apple-touch-icon">

	<!-- iOS 7 iPhone (retina) -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/Bording-RetinaIcon120.png" sizes="120x120" rel="apple-touch-icon">

	<!-- iOS 6 iPhone (retina) -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/Bording-IpadIcon76.png" sizes="114x114" rel="apple-touch-icon">

	<!-- iOS 7 iPad -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/Bording-IpadIcon76.png" sizes="76x76" rel="apple-touch-icon">

	<!-- iOS 6 iPad -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/Bording-IphoneIcon60.png" sizes="72x72" rel="apple-touch-icon">

	<!-- iOS 6 iPhone -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/Bording-IphoneIcon60.png" sizes="60x60" rel="apple-touch-icon">

	<!-- Startup images -->

	<!-- iOS 6 & 7 iPad (retina, portrait) -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/iPadPortraitLaunch@2x.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

	<!-- iOS 6 & 7 iPad (retina, landscape) -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/iPadLandscapeLaunch@2x.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

	<!-- iOS 6 iPad (portrait) -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/iPadPortraitLaunch.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">

	<!-- iOS 6 iPad (landscape) -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/iPadLandscapeLaunch.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">

	<!-- iOS 6 & 7 iPhone 5 -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/iPhone5Launch@2x.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

	<!-- iOS 6 & 7 iPhone (retina) -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/iPhone4Launch@2x.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

	<!-- iOS 6 iPhone -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/devices/iPhoneLaunch.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
	<?php wp_head(); ?>
</head>
<body <?php body_class('antialiased'); ?>>
	<header>
		<div class="small-12 columns fixed contain-to-grid color">
			<!-- HEADER -->
			<!-- Top Header Text -->
			<div class="row greybg">
				<div class="small-12 columns">
					<p class="tinytext right">&nbsp;</p>
				</div>
			</div>
			<!-- /END TOP HEADER TEXT -->
			<!-- **MAIN MENU** Row -->
			<div class="row greybg">
				<!-- LOGO -->
				<div class="small-5 small-centered medium-3 medium-uncentered large-3 large-uncentered columns logo nopadleft"><a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a>
					</div><!-- /END LOGO -->
					<!-- MAIN NAV -->
					<div class="small-12 medium-9 large-9 columns">
						<!-- Starting the Top-bar -->
						<nav class="top-bar" data-topbar data-options="mobile_show_parent_link: true">
							<ul class="title-area">
								<li class="name">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/FEBordingLogo-neg.png" alt="febording logo" width="100"></a>
								</li>
								<li class="toggle-topbar menu-icon">
									<a href="#" class="right">Menu</a>
								</li>
							</ul>
							<section class="top-bar-section">
								<!-- Right Nav Section -->
								<?php
								wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => false,
								'depth' => 0,
							'items_wrap' => '<ul class="right">%3$s</ul>',
							'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
							'walker' => new reverie_walker( array(
							'in_top_bar' => true,
							'item_type' => 'li',
							'menu_type' => 'main-menu'
							) ),
							) );
							?>
							<?php
								// Uncomment the following to enable the right menu (additional menu)

								/*
							wp_nav_menu( array(
							'theme_location' => 'additional',
							'container' => false,
							'depth' => 0,
						'items_wrap' => '<ul class="right">%3$s</ul>',
						'walker' => new reverie_walker( array(
						'in_top_bar' => true,
						'item_type' => 'li',
						'menu_type' => 'main-menu'
						) ),
						) );
						*/
						?>
					</ul>
				</section>
			</nav>
			</div><!-- /END MAIN NAV -->
			</div><!-- /END **MAIN MENU** -->
		</div>
		</header><!-- /header -->