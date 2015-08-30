	<footer>
    	<section class="newsletter">
			<div class="row newsletter-content">
				<div class="col-xs-12 text-center">
					<p class="heatext-centerdline">SUBSCRIBE NOW TO GET 10% OF YOUR NEXT PURCHASE!</p>
				</div>
				<div class="col-xs-12 text-center">
					<form class="newsletterForm">
						<input type="email" class="email" name="newsletteremail" placeholder="  ENTER EMAIL  ADDRESS">
						<input type="submit" class="subscribe" value="SUBSCRIBE">
					</form>
				</div>
			</div> <!-- row -->
    	</section>
		<div class="container">
			<div class="row">
				
					<div class="col-sm-4">
						<h4>SHOP WITH CONFIDENCE</h4>
						<div class="footsec">
							<?php 
								$page1 = get_page_by_title( 'Money Back Guarantee' );
								$page2 = get_page_by_title( 'Secure Ordering' );
								$page3 = get_page_by_title( 'Privacy Policy' );
								$page4 = get_page_by_title( 'Shipping' );
								$page5 = get_page_by_title( 'Returns Policy' );
								$page6 = get_page_by_title( 'Tracking Your Order' );

							?>
							<a href="<?php echo get_permalink ( $page1->ID); ?>" class="links">Money Back Guarantee</a><br/>
							<a href="<?php echo get_permalink ( $page2->ID); ?>" class="links">100% Secure Ordering</a><br/>
							<a href="<?php echo get_permalink ( $page3->ID); ?>" class="links">Privacy Policy</a>
						</div> 
					</div><!-- col-sm-4 -->
				

				
					<div class="col-sm-4">
						<h4>SHIPPING AND RETURNS</h4>
						<div class="footsec">
							<a href="<?php echo get_permalink ( $page4->ID); ?>" class="links">Shipping &amp; Delivery</a><br/>
							<a href="<?php echo get_permalink ( $page5->ID); ?>" class="links">Returns Policy</a><br/>
							<a href="<?php echo get_permalink ( $page6->ID); ?>" class="links">Tracking Your Order</a>
						</div><!-- footsec -->
					</div><!-- col-sm-4 -->
				

				
					<div class="col-sm-4">
						<h4>CONNECT WITH US</h4>
						<div class="footsec social">
							<a href="#" class="links"><img class="social" src="<?php bloginfo('template_directory'); ?>/images/social/facebook.png" alt="Thumb" style="width:20px; height:20px"></a>
							<a href="#" class="links"><img class="social" src="<?php bloginfo('template_directory'); ?>/images/social/google.png" alt="Thumb" style="width:20px; height:20px"></a>
							<a href="#" class="links"><img class="social" src="<?php bloginfo('template_directory'); ?>/images/social/instagram.png" alt="Thumb" style="width:20px; height:20px"></a>
							<a href="#" class="links"><img class="social" src="<?php bloginfo('template_directory'); ?>/images/social/twitter.png" alt="Thumb" style="width:20px; height:20px"></a><br/>
						</div>
					</div><!-- col-sm-4 -->
				
			
			</div><!-- row -->
			<br>

			<div class="copyright">
					<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
			</div><!-- copyright  -->
		</div><!-- container -->
		<?php dynamic_sidebar('Footer Widgets'); ?>
	</footer>

	

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->

	
	
</body>

</html>
