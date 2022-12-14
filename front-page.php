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
		<div class = "wrapper">
	<section class ="mens-womens-img">
		<div class = "mask">

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
</div>
			</section>
<div class = "mens-womens-intro">

				<h1 class = "yvr-wear">Shop Now.</h1>

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
<section class = "new-releases-products-preview">
		
<div class = "new-releases-preview-text">
		<h1>New Releases</h1>
		<p class = "view-all"><a href="http://localhost/merchandisestore/product-category/new-releases/">View All</a></p>
		</div>

		<div class = "new-releases-products">
		<?php
			echo do_shortcode('[products limit="5" category = "new-releases" columns="4"]'); 
		?>
</div>
</section>

</section>
<section class = "new-releases-img">
	
		<div class = "new-releases-mask">
<?php

					if ( get_field( 'new-releases-cta' ) ) {
						$image = get_field('new-releases-cta');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
	
						}
						
					}

?>
		</div>

	<div class = "new-releases-cta-intro">

		<h1 class = "hdr">New Releases.</h1>

			<div class = "other-cta-buttons"> 

<?php

					$link = get_field('new_releases_button');
					if( $link ): 
    					$link_url = $link['url'];
    					$link_title = $link['title'];
    					$link_target = $link['target'] ? $link['target'] : '_self';
    				?>
    				<a class="home-page-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			
			<?php endif; 


?>
</div>
</div>
</section>

<section class = "on-sale-img">

	<div class = "on-sale-mask">

<?php

				wp_reset_postdata();
						// endif;

					if ( get_field( 'on_sale_message' ) ) {
						$image = get_field('on_sale_message');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)
							if( $image ) {
							echo wp_get_attachment_image( $image, $size );

					}
	
				}

				?>
	</div>


	<div class = "cta-intro">
		<h1 class = "hdr">On Sale.</h1>

				<div class = "other-cta-buttons"> 
				
				<?php

				$link = get_field('on_sale_button');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="home-page-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				
		
		<?php endif; 

?>
</div>
</div>
</section>
<div class = "on-sale-preview-text">
		<h1>ON SALE</h1>
		<p class = "view-all"><a href="/">View All</a></p>
		</div>
<section class = "on-sale-products-preview">

		<?php
			echo do_shortcode('[products limit="5" columns="4" orderby="popularity" class="quick-sale" ]'); 
		?>

</section>
<section class = "accessories-img">
	<div class = "accessories-mask">
<?php
				if ( get_field( 'accessories_cta' ) ) {
					$image = get_field('accessories_cta');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
					echo wp_get_attachment_image( $image, $size );

				}
			}

			?>
	</div>


	<div class = "cta-intro">
	<h1 class = "hdr">Accessories.</h1>
<div class = "other-cta-buttons"> 

<?php

			$link = get_field('accessories_button');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="home-page-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
	
		<?php endif; 
?>
</div>
</div>
</section>
<section class = "make-an-account-img">
<div class = "make-an-account-mask">
<?php

			if ( get_field( 'make_an_account_cta' ) ) {
				$image = get_field('make_an_account_cta');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
			echo wp_get_attachment_image( $image, $size );

			}
		}

		?>
</div>
<div class = "cta-intro">
	<h1 class = "hdr">Make An Account</h1>
		<div class = "other-cta-buttons"> 

<?php

			$link = get_field('account_creation_button');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="home-page-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

		<?php endif; 

	?>
		</div>	
	</div>
</section>

<?php



			}

		endwhile; // End of the loop.


		?>
		

		</div>
	</main><!-- #main -->

<?php

get_footer();
