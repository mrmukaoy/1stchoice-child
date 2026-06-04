<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yo_Base_Layer
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php
		if ( have_posts() ) {

			$front_page_title = '';
			if ( is_front_page() ) {
				$front_page_title = ' screen-reader-text';
			}
			if ( ! is_front_page() ) {
				?>
				<div class="page-header-wrap">
					<div class="entry-header-wrap-decoration"></div>
					<header class="page-header">
						<h1 class="page-title<?php echo $front_page_title; ?>"><?php single_post_title(); ?></h1>
					</header>
				</div>
				<?php
			} //endif; ?>

		<section class="meat-potatoes">

		<?php /* Start the Loop */
			while ( have_posts() ) {
				the_post();

				/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
				if ( '' != get_post_format() && 'standard' != get_post_format() ) {
					get_template_part( 'template-parts/format', get_post_format() );
				} else {
					get_template_part( 'template-parts/content', get_post_type() );
				}

			} //endwhile;

			echo '</section><!-- .meat-potatoes -->';

			the_posts_navigation();

		} else {

			get_template_part( 'template-parts/content', 'none' );

			echo '</section><!-- .meat-potatoes -->';
		} //endif; ?>

		<?php get_sidebar(); ?>

	</main><!-- #main -->

<?php
get_footer();
