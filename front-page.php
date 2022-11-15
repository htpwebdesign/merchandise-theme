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
	<section class ="mens-womens-img">
		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );
			
			if ( function_exists( 'get_field' ) ) {
				if ( get_field( 'home_message' ) ) {
					$image = get_field('home_message');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				}
?>
<div class = "mens-womens-intro">

				<h1 class = "yvr-wear">YVR Wear</h1>

	<div class = "cta-buttons">

<?php
				$link = get_field('mens');
					if( $link ): 
    					$link_url = $link['url'];
    					$link_title = $link['title'];
    					$link_target = $link['target'] ? $link['target'] : '_self';
    				?>
    				<a class="mens-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			
				<?php endif; 

				$link = get_field('womens');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="womens-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

				<?php endif; 
?>
</div>
</div>
</section>
<section class = "new-releases-img">
<?php

					if ( get_field( 'new-releases-cta' ) ) {
						$image = get_field('new-releases-cta');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
	
						}
						
					}

?>
<div class = "cta-buttons"> 

<?php

					$link = get_field('new_releases_button');
					if( $link ): 
    					$link_url = $link['url'];
    					$link_title = $link['title'];
    					$link_target = $link['target'] ? $link['target'] : '_self';
    				?>
    				<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			
			<?php endif; 


?>
</div>
</section>
<section class = "tesitmonial-slider">
<?php


			$args = array(

					'post_type'      => 'yvr-testimonial',
					'posts_per_page' => -1
			
				);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) : ?>
				<div class="swiper">
					<div class="swiper-wrapper">
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="swiper-slide">
							<?php the_content(); ?>
							</div>
			<?php endwhile; ?>
			</div>

				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>

			</div>


</section>
<section class = "on-sale-img">
<?php

				wp_reset_postdata();
						endif;

					if ( get_field( 'on_sale_message' ) ) {
						$image = get_field('on_sale_message');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)
							if( $image ) {
							echo wp_get_attachment_image( $image, $size );

					}
	
				}

				?>
				<div class = "cta-buttons"> 
				
				<?php

				$link = get_field('on_sale_button');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				
		
		<?php endif; 
?>
</div>
</section>
<section class = "on-sale-products-preview">

		<?php
			echo do_shortcode('[products limit="5" columns="4" orderby="popularity" class="quick-sale" on_sale="true" ]'); 
		?>

</section>
<section class = "accessories-img">
<?php
				if ( get_field( 'accessories_cta' ) ) {
					$image = get_field('accessories_cta');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
					echo wp_get_attachment_image( $image, $size );

				}
			}

			?>
<div class = "cta-buttons"> 

<?php

			$link = get_field('accessories_button');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
	
		<?php endif; 
?>
</div>
</section>
<section class = "make-an-account-img">

<?php

			if ( get_field( 'make_an_account_cta' ) ) {
				$image = get_field('make_an_account_cta');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
			echo wp_get_attachment_image( $image, $size );

			}
		}

		?>
<div class = "cta-buttons"> 

<?php

			$link = get_field('account_creation_button');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

		<?php endif; 

	?>	
	</div>
</section>

<?php



			}

		endwhile; // End of the loop.


		?>
		


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
