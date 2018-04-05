<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aguilas
 */

?>

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<!-- <div class="footer-menu">
			<?php // wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</div> -->
		<div class="site-info col-md-12">
			<span class="sep"> | </span>
				<a href="<?php echo esc_url( __( 'https://www.aguilascfc.org/', 'aguilas' ) ); ?>"><?php printf( esc_html__( 'Copyright ©2018 %s', 'aguilas' ), 'Aguilas Centro Familiar Cristiano' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
