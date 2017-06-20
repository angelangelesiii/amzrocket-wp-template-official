<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AMZ_Rocket_Official
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amzrocket' ); ?></a>

	<header id="mainheader" class="site-header top-position <?php if(is_front_page) echo 'is-front-page'; ?>">
		<nav class="wrapper-big site-nav clearfix">
			
			<div class="logo-container">
				<a href="<?php home_url(); ?>" class="logo-link">
					<img src="<?php echo get_template_directory_uri()."/assets/images/amzrocket-white-red-s.png" ?>" alt="AMZ Rocket" class="logo-main" title="AMZ Rocket">
				</a>
			</div>

			<div class="contact-info-container">
				<span class="contact-phone contact-info"><a href="tel:+4911122233344"><i class="fa fa-phone" aria-hidden="true"></i> +49 111 222 333 44</a></span>
				<span class="contact-email contact-info"><a href="mailto:anfrage@amz-rocket.de"><i class="fa fa-envelope" aria-hidden="true"></i> Anfrage</a></span>
			</div><br/>

			<div class="menu-container">
				<?php
				wp_nav_menu( array( 'theme_location' => 'main-header', 'menu_id' => 'main-nav-menu', 'depth' => '2' ) );
				?>
			</div>

		</nav>
	</header>

	<div class="position-marker" id="top"></div>

	<div id="content" class="site-content">
