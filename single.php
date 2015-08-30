<?php get_header(); ?>

<div id="breadcrumb" class="breadcrumbs">

	<?php woocommerce_breadcrumb(); ?>

</div>

<div id="page-row">
	<div id="main-content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<h2><?php the_title(); ?></h2>
				
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>
				
				<?php edit_post_link('Edit this entry','','.'); ?>
				
			</div>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

	</div> <!-- closes main-content -->
	
	<div id="left-panel">
		<?php get_sidebar(); ?>
	</div>	

</div> <!-- closes page-row -->

<?php get_footer(); ?>