<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bowark
 */

?>

	</div><!-- #content -->
	</div><!-- .layout-container -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	  <div class="layout-container">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bowark' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bowark' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bowark' ), 'bowark', '<a href="http://ceciliasantos.com" rel="designer">Cecilia Santos</a>' ); ?>
		</div><!-- .site-info -->
	 </div><!-- .layout-container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
