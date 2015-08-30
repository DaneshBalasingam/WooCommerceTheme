<div id="HeaderLogIn">

	<?php if ( is_user_logged_in() ) { ?>

		<div id="logged_in_user">
			    
			<a href="<?php bloginfo('template_directory' ); ?>/my-account/">
			<?php $current_user = wp_get_current_user(); echo 'Welcome ' . $current_user->user_login ; ?></a>

		</div>

		<a href="<?php echo wp_logout_url(get_site_url()) ?>" id="mobileLogOutButton">LOG OUT</a></br>
			
			
	 <?php }

	 else { ?>
		<a href="<?php bloginfo('template_directory' ); ?>/my-account/" id="mobileLogInButton">LOG IN</a></br>
			<div id="createAccLink">
				<a href="<?php bloginfo('template_directory' ); ?>/my-account/">Create Account</a>
			</div>
	 <?php } ?>				
</div>