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


			$args = array(
				'post_type'      => 'yvr-designer',
				'posts_per_page' =>  2,
				'order'          => 'ASC',
				'orderby'        => 'title'
			);
			
			$query = new WP_Query( $args );
			
			if ( $query -> have_posts() ) {
				while ( $query -> have_posts() ) {
					$query -> the_post();
						the_title();

						// $picture = get_field('designer_profile_picture');
						// if( $picture ) {
						// Do something.
				
					// 	echo $picture;
				
					// }


					$email = get_field('designers_email');
					if( $email ) {
					// Do something.
			
					echo $email;
			
				}
			
					$phonenumber = get_field('designers_phone_number');
					if( $phonenumber ) {
					// Do something.
					echo $phonenumber;}
			
					$website = get_field('designers_website');
					if( $website ) {
					// Do something.
					echo $website;}
			
					$socialmedia = get_field('designers_social_media');
					if( $socialmedia ) {
					// Do something.
					echo $socialmedia;}
					
			} 
			
			wp_reset_postdata();	
				}
			
			
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
				<?php endif; 
		
		endwhile; // End of the loop.

		
	




		
 ?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
