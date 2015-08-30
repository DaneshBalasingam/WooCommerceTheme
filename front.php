<?php

	/*

		Template Name: Home page

	*/

?>


<?php get_header(); ?>

<div id="breadcrumb" class="breadcrumbs">

	<?php woocommerce_breadcrumb(); ?>

</div>


<div id="page-row">
	<div id="main-content">

		<div> 
			<?php get_template_part( 'slider' ); ?>
		</div>

		<section id="home_thumbs" class="row">

			<?php

	            $args = array(

	            'number'     => $number,
	            'orderby'    => $orderby,
	            'order'      => $order,
	            'hide_empty' => $hide_empty,
	            'include'    => $ids
	            );

	            $product_categories = get_terms( 'product_cat', $args );
	            
	            foreach( $product_categories as $cat ) { 

        	?>

        		<?php if ( $cat->name == 'New' ) { ?>
					<div class="home_thumb_wrap col-lg-3 col-md-6  col-xs-12">

						<div class="home_thumb thumbnail">
							<h2>
				                <a href="<?php echo esc_url(get_term_link( $cat )) ?>">
									New 
								</a>
							</h2>
							<div>
								<a href="<?php echo esc_url(get_term_link( $cat )) ?>">
									<img src="<?php bloginfo('template_directory'); ?>/images/new.jpg" alt="New Instruments" />
								</a>
							</div>
						</div>					

					</div>

				<?php } ?>

				<?php if ( $cat->name == 'Specials' ) { ?>
					<div class="home_thumb_wrap col-lg-3 col-md-6  col-xs-12">

						<div class="home_thumb thumbnail">
							<h2>
				                <a href="<?php echo esc_url(get_term_link( $cat )) ?>">
									Specials
								</a>
							</h2>
							<div>
								<a href="<?php echo esc_url(get_term_link( $cat )) ?>">
									<img src="<?php bloginfo('template_directory'); ?>/images/specials.jpg" alt="Special Instruments" />
								</a>
							</div>
						</div>					

					</div>


				<?php } ?>

				<?php if ( $cat->name == 'Clearance' ) { ?>
					<div class="home_thumb_wrap col-lg-3 col-md-6  col-xs-12">

						<div class="home_thumb thumbnail">
							<h2>
				                <a href="<?php echo esc_url(get_term_link( $cat )) ?>">
									Clearance
								</a>
							</h2>
							<div>
								<a href="<?php echo esc_url(get_term_link( $cat )) ?>">
									<img src="<?php bloginfo('template_directory'); ?>/images/clearance.jpg" alt="Clearance Instruments" />
								</a>
							</div>
						</div>					

					</div>


				<?php } ?>

				<?php if ( $cat->name == 'Popular' ) { ?>
					<div class="home_thumb_wrap col-lg-3 col-md-6  col-xs-12">

						<div class="home_thumb thumbnail">
							<h2>
				                <a href="<?php echo esc_url(get_term_link( $cat )) ?>">
									Popular
								</a>
							</h2>
							<div>
								<a href="<?php echo esc_url(get_term_link( $cat )) ?>">
									<img src="<?php bloginfo('template_directory'); ?>/images/popular.jpg" alt="Popular Instruments" />
								</a>
							</div>
						</div>					

					</div>


				<?php } ?>

			<?php } ?>

		</section>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">


				<div class="entry">

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				</div>


			</div>
			
			<?php // comments_template(); ?>

		<?php endwhile; endif; ?>

	</div> <!-- closes main-content -->

		

</div> <!-- closes page-row -->

</div>

<?php get_footer(); ?>