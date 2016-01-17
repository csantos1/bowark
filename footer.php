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
              <img id="top-button" src="<?php bloginfo('template_url'); ?>/images/top-button.png">
		<div class="site-info">
                    <h1>Join Us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit In sed egestas urna</p>
                    <?php echo do_shortcode( '[contact-form-7 id="26" title="Join"]' ); ?>
                    <p><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter-square"></i></a><a href="#"><i class="fa fa-google-plus-square"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a><a href="#"><i class="fa fa-pinterest-square"></i></a></p>
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
