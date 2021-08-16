<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GMPortfolio
 */

?>

	<footer id="colophon" class="site-footer">
		
	<div class="siteNav">

	
	<a href="https://www.linkedin.com/in/gaven-martung-447300153/">
	<img src="<?php bloginfo('template_url'); ?>/assets/about.png">
	<a href="mailto:Gaven122499@gmail.com">
	<img src="<?php bloginfo('template_url'); ?>/assets/contact.png" >



	</div>
	
	
	
	<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gmportfolio' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'gmportfolio' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'gmportfolio' ), 'gmportfolio', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
