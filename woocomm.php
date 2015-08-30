<?php get_header(); ?>

<div id="breadcrumb" class="breadcrumbs">

	<?php woocommerce_breadcrumb(); ?>

</div>

<div id="page-row">
	<div id="main-content">

		 <?php woocommerce_content(); ?> 

	</div>

	<div id="left-panel">
		<?php get_sidebar(); ?>
	</div>

</div> <!-- closes page-row -->

<?php get_footer(); ?>