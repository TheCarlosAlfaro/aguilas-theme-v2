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
		<div class="site-info col-md-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'aguilas' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly Powered by %s', 'aguilas' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
				<a href="<?php echo esc_url( __( 'https://www.aguilascfc.org/aguilas-theme/', 'aguilas' ) ); ?>"><?php printf( esc_html__( 'Aguilas Theme By: %s', 'aguilas' ), 'Aguilas Centro Familiar Cristiano' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
