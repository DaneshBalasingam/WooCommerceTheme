<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory' ); ?>/css/plusslider.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header" class="clearfix" style="background-image:url(<?php echo get_header_image() ?>)">

			<div id="site-logo" class="clearfix">
				<div id="logo-img">
					 <?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
				     
				</div>
				<div id="logo-text">
					<p id="logo-head">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

					</p>
					<p id="logo-caption">
						<?php
						    $description = get_bloginfo( 'description', 'display' );
						    if ( $description || is_customize_preview() ) : 
						?>
						        <p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					</p>
				</div>

			</div>

			<div id="header-user" class="clearfix">

				<?php if ( is_user_logged_in() ) { ?>

					<div id="header-logged-in" class="account-info-widget">
												    
						<a id="welcome-user-button" href="<?php bloginfo('template_directory' ); ?>/my-account/">
							<?php $current_user = wp_get_current_user(); echo 'Welcome ' . $current_user->user_login ; ?>
						</a>

						<a id="logOut-button" href="<?php echo wp_logout_url(get_site_url()) ?>" id="logOutButton">Log Out</a>
					</div>
						
				 <?php }

				 else { ?>
					<div id="header-logged-out" class="account-info-widget">

						<a id="register-button" href="<?php bloginfo('template_directory' ); ?>/my-account/">Register</a>

						<a id="logIn-button" href="<?php bloginfo('template_directory' ); ?>/my-account/" id="logInButton">Log In</a>
												
					</div>
				 <?php } ?>	

				 <div class="cart-toggle" aria-label="Cart button">
			    	<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
			    	Cart
				</div>
				<div id="cart" class="mobile-nav-widget">
					<?php   dynamic_sidebar('Cart Widgets'); ?> 
				</div>			
			</div>
			
		</div>	
		<div class="row">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				
				<div id="mobile-top-nav clearfix">
					<div id="mobile-top-nav-left">
						<div class="mobile-menu-toggle" aria-label="Menu button">
			        		<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
			        	</div>
		        	</div>

		        	<div id="mobile-top-nav-right">
		        		<div class="mobile-search-toggle" aria-label="Search button">
			        		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			        	</div>
		        		<div id="mobile_search" class="mobile-nav-widget">
							<?php get_product_search_form(); ?> 
						</div>
			        	<div class="mobile-user-toggle" aria-label="User button">
			        		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			        	</div>
			        	<div id="user" class="mobile-nav-widget">
							<?php get_template_part( 'logInWidget' ); ?>
						</div>
			        	<div class="mobile-cart-toggle" aria-label="Cart button">
			        		<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
			        	</div>
			        	<div id="mobile-cart" class="mobile-nav-widget">
							<?php   dynamic_sidebar('Cart Widgets'); ?> 
						</div>
		        	</div>
	        	</div>
	        	<div id="top-nav" class="clearfix">
					<div id="menu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
					<div id="search_box">
						<?php get_product_search_form(); ?> 
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</div>
			
			
		