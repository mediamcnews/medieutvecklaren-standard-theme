<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Medieutvecklaren_Standard_Theme
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<!--<div id="site-generator">
				<?php do_action( 'medieutvecklaren_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://allvarligtkul.se/', 'medieutvecklaren' ) ); ?>" title="<?php esc_attr_e( 'Web agency based in Gävle and Sundsvall, Sweden', 'medieutvecklaren' ); ?>" rel="generator"><?php printf( __( 'Created by %s', 'medieutvecklaren' ), 'allvarligt kul' ); ?></a>
			</div>-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>