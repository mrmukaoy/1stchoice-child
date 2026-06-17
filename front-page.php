<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yo_Base_Layer
 */

get_header();
?>

	<section id="content" class="site-content page-full">
		<header class="page-header">
			<h1 class="entry-title screen-reader-text"><?php echo yo_baselayerpage_title(); ?></h1>
		</header><!-- .page-header -->

		<main id="primary" class="site-main">
			<!-- <section class="meat-potatoes"> -->

			<?php
			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				/* Policy: no comments on pages, only blogs (if at all)
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					} //endif;
				*/

			} // endwhile; End of the loop.
			?>

			<!-- </section> --><!-- .meat-potatoes -->

		</main><!-- #main -->

		<?php // get_sidebar(); ?>

	</section><!-- .site-content -->
<?php
get_footer();
