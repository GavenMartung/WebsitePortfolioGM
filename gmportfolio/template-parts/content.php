<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GMPortfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
	<section class="images1">
	<a href="https://www.instagram.com/gvnmrtng/">
	<img src="<?php bloginfo('template_url'); ?>/assets/Modeling.gif" class="TV1">
	<a href="https://www.castingcall.club/m/Gmartung24">
	<img src="<?php bloginfo('template_url'); ?>/assets/VoiceActing-3_2.gif" class="TV1">
	</section>
	

	<section class="images2">
	<a href="https://www.instagram.com/skepticsherb/">
	<img src="<?php bloginfo('template_url'); ?>/assets/FINALARTHOPE.gif" class="TV2">
	<a href="https://www.artstation.com/gaven122499">
	<img src="<?php bloginfo('template_url'); ?>/assets/GameDev-2.gif" class="TV2">
	<a href="https://github.com/GavenMartung">
	<img src="<?php bloginfo('template_url'); ?>/assets/Programming_2.gif" class="TV3">

	</section>
	
			
	</header><!-- .entry-header -->

	<?php gmportfolio_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
