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
		<div class = "designers-page">

		<?php
		
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );


			?>
			
<div class ="whole-designer-page-content">
	
			<div class ="designer-page-content">		
			<div class = "designers-biographies">
				
			<?php


			$images = get_field('designers-pfp');
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




					
?>

</div>

<div class = "designers-wrapper">

<?php
						the_title();

						// $picture = get_field('designer_profile_picture');
						// if( $picture ) {
						// Do something.
				
					// 	echo $picture;
				
					// }


					

?>



<div class = "designers-emails">

<?php

					$email = get_field('designers_email');
					if( $email ) {
					// Do something.
			
					echo $email;
			
				}

?>

</div>
<div class = "designers-phone-numbers">						
<?php
			
					$phonenumber = get_field('designers_phone_number');
					if( $phonenumber ) {
					// Do something.
					echo $phonenumber;}


?>

</div>
<div class = "designers-websites">										
<?php
			
					$website = get_field('designers_website');
					if( $website ) {
					// Do something.
					echo $website;}

				
?>

</div>
	<div class = "designers-social-medias">								
<?php
			
					$socialmedia = get_field('designers_social_media');
					if( $socialmedia ) {
					// Do something.
					echo $socialmedia;}
					
			} 
			
			wp_reset_postdata();	
				}
		
		
		endwhile; // End of the loop.

		
 ?>
</div>

</div>
</div>	

<div class = "about-us-paragraph">

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut dignissim nisl. Praesent iaculis congue massa, sit amet venenatis sapien aliquam vitae. Pellentesque ut finibus ante. Sed in scelerisque nibh, ac euismod tellus. Aenean mollis diam tellus, vitae rhoncus justo cursus ac. Sed vestibulum vulputate tortor, a sagittis ante lacinia quis. Aenean sit amet magna quis urna mollis consequat sed in eros. Ut condimentum, arcu accumsan facilisis vestibulum, magna ligula venenatis sapien, non mattis magna turpis in dolor. Integer ac enim sed tellus pretium efficitur. Nullam maximus aliquam augue. Quisque aliquam facilisis sollicitudin. Morbi sed porttitor neque. In tellus mi, imperdiet pulvinar orci nec, feugiat volutpat ligula. Curabitur mauris ipsum, consequat eget blandit eget, pulvinar nec felis. </p>


</div>

<!-- <p class = "bottom-about-us-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut dignissim nisl. Praesent iaculis congue massa, sit amet venenatis sapien aliquam vitae. Pellentesque ut finibus ante. Sed in scelerisque nibh, ac euismod tellus. Aenean mollis diam tellus, vitae rhoncus justo cursus ac. Sed vestibulum vulputate tortor, a sagittis ante lacinia quis. Aenean sit amet magna quis urna mollis consequat sed in eros. Ut condimentum, arcu accumsan facilisis vestibulum, magna ligula venenatis sapien, non mattis magna turpis in dolor. Integer ac enim sed tellus pretium efficitur. Nullam maximus aliquam augue. Quisque aliquam facilisis sollicitudin. Morbi sed porttitor neque. In tellus mi, imperdiet pulvinar orci nec, feugiat volutpat ligula. Curabitur mauris ipsum, consequat eget blandit eget, pulvinar nec felis. </p>
 -->

</div>
</div>


	</main><!-- #main -->

<?php

get_footer();
