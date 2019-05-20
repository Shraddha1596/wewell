<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Unicon
 */

get_header(); ?>

<?php do_action('unicon-lite-breadcrumb'); ?>

<div class="container-wrap clearfix">
	<div class="inner-container clearfix">
		
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'single' );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer();