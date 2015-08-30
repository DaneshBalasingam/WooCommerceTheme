<section id="feature">

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		<?php query_posts(array('posts_per_page' =>-1, 'tag' =>'featured'));  ?>

	
		<ol class="carousel-indicators">

		    <?php 

		    	$data_slide = 0;

		    	if (have_posts()) : while (have_posts()) : the_post(); 

		    ?>

		    	<li data-target="#carousel-example-generic" data-slide-to="<?php echo $data_slide; ?>"></li>

		    	<?php $data_slide++;?>		    		
		
			<?php endwhile; ?>

			<?php endif; ?>

		</ol>

		<div id="slide_box" class="carousel-inner" role="listbox">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<div class="item">
			      <?php echo get_the_post_thumbnail( $post->ID); ?>
			      <div class="carousel-caption">
			      	<h3 class="slider_title"><?php the_title(); ?></h3>
			      	<div class="slider_excerpt"><?php the_excerpt(); ?></div>
			      	<a class="slider_link" href="<?php the_permalink(); ?>">READ MORE</a>
			      </div>
			    </div>		    		
		
			<?php endwhile; ?>

			<?php endif; ?>

		</div>
	 
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>	

			
    <?php wp_reset_query(); ?>

	</div>


</section>
