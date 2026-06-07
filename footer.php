<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AMM_Parent
 */

?>
	<div class="site-footer-wrap">
	<footer id="colophon" class="site-footer">
		<?php // count number of active sidebars
		$col = 0;
		if ( is_active_sidebar( 'footer-1' ) ) { $col++; }
		if ( is_active_sidebar( 'footer-2' ) ) { $col++; }
		if ( is_active_sidebar( 'footer-3' ) ) { $col++; }
		$col = 'col-' . $col;

		/*
		$subcol = 0;
		if ( is_active_sidebar( 'subfooter-1' ) ) { $subcol++; }
		if ( is_active_sidebar( 'subfooter-2' ) ) { $subcol++; }
		if ( is_active_sidebar( 'subfooter-3' ) ) { $subcol++; }
		$subcol = 'col-' . $subcol;
		*/

		if ( 0 < $col ) {
			$border = '';
			// if ( 0 < $subcol ) { $border = ' include-subfooter'; }

			echo '<section class="footer-widget-container ' . $col . $border . '">';

			if ( is_active_sidebar( 'footer-1' ) ) {
				echo '<div id="footer-1" class="widget-area widget footer-1"><div class="widget-wrapper">';
				dynamic_sidebar( 'footer-1' );
				echo '</div></div><!-- #footer-1 -->';
			}

			if ( is_active_sidebar( 'footer-2' ) ) {
				echo '<div id="footer-2" class="widget-area widget footer-2"><div class="widget-wrapper">';
				dynamic_sidebar( 'footer-2' );
				echo '</div></div><!-- #footer-2 -->';
			}

			if ( is_active_sidebar( 'footer-3' ) ) {
				echo '<div id="footer-3" class="widget-area widget footer-3"><div class="widget-wrapper">';
				dynamic_sidebar( 'footer-3' );
				echo '</div></div><!-- #footer-3 -->';
			}

			echo '</section>';

		}

		/*
		if ( 0 < $subcol ) {

			echo '<section class="subfooter-widget-container ' . $subcol . '">';

			if ( is_active_sidebar( 'subfooter-1' ) ) {
				echo '<div id="subfooter-1" class="widget-area widget subfooter-1"><div class="widget-wrapper">';
				dynamic_sidebar( 'subfooter-1' );
				echo '</div></div><!-- #subfooter-1 -->';
			}

			if ( is_active_sidebar( 'subfooter-2' ) ) {
				echo '<div id="subfooter-2" class="widget-area widget subfooter-2"><div class="widget-wrapper">';
				dynamic_sidebar( 'subfooter-2' );
				echo '</div></div><!-- #subfooter-2 -->';
			}

			if ( is_active_sidebar( 'subfooter-3' ) ) {
				echo '<div id="subfooter-3" class="widget-area widget subfooter-3"><div class="widget-wrapper">';
				dynamic_sidebar( 'subfooter-3' );
				echo '</div></div><!-- #subfooter-3 -->';
			}

			echo '</section>';

		}
		*/
		?>

		<?php /*
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ammparent' ) ); ?>">
				<?php printf( esc_html__( 'Proudly powered by %s', 'ammparent' ), 'WordPress' ); ?>
			</a>
			<span class="sep"> | </span>
			<?php
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'ammparent' ), 'ammparent', '<a href="https://afflectomm.com">Martin</a>' );
			?>
		</div><!-- .site-info -->
		*/ ?>
	</footer><!-- #colophon -->
	<div id="subfooter">
		<a href="https://afflectomm.com"><img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/DK-Managed-by-300x61.png'; ?>" alt="managed by Afflecto Media Marketing" /></a>
	</div>
</div><!-- .site-footer-wrap -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
