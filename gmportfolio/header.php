<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GMPortfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>


	
	<!-- here we use the template url code and then join our css file location onto the end -->
	<!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css">-->

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gmportfolio' ); ?></a>

	<header id="masthead" class="site-header">

		
		<div class="logo">
			<!-- todo : add the logo in-->

			<img src="<?php bloginfo('template_url'); ?>/assets/Logo.png">

		</div><!-- .site-branding -->

		<div class="body">
			<!-- todo : add the logo in-->

		

		</div>


		<div class="mixtape">
		<img src="<?php bloginfo('template_url'); ?>/assets/mixtape.svg">

		<audio controls autoplay style="display:none">
		<source src="<?php bloginfo('template_url'); ?>/assets/Main Theme1.mp3">
		
		Your browser does not support the audio element.
		</audio>
			

		</div>

		<!-- <nav id="site-navigation" class="main-navigation">  -->
			
			
		<!-- </nav><!-- #site-navigation --> 

		

	</header><!-- #masthead -->
