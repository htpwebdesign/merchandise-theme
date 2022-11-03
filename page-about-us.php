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
 * @package Merchandise_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.

		
	
		$images = get_field('designers-work');
		$size = 'full'; // (thumbnail, medium, large, full or custom size)
		if( $images ): ?>
			<ul class = "designers-gallery">
				<?php foreach( $images as $image_id ): ?>
					<li>
						<?php echo wp_get_attachment_image( $image_id, $size ); ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();