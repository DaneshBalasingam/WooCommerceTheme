/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */

function navigation() {

	$j('.mobile-menu-toggle').click(function() {
  		$j('#menu').toggle();
	});

	$j('.mobile-search-toggle').click(function() {
  		$j('#mobile_search').toggle();
	});

	$j('.mobile-user-toggle').click(function() {
  		$j('#user').toggle();
	});

	$j('.mobile-cart-toggle').click(function() {
  		$j('#mobile-cart').toggle();
	});

	$j('.cart-toggle').click(function() {
  		$j('#cart').toggle();
	});

	$j('.mega-menu ul').addClass('hide-mega-menu');

	$j('.mega-menu > ul').addClass('row');

	var mega_menu_pos = $j('.mega-menu').offset().left;

	$j('.mega-menu > ul').offset({top:140, left:mega_menu_pos});

	$j('.mega-menu').click(function() {
  		$j('.mega-menu ul').toggleClass('display-mega-menu');
  		$j('.mega-menu ul').toggleClass('hide-mega-menu');
	});
	
	$j('.mega-menu > ul > li').each(function(){
		var item_content = $j(this).html();
		var new_content = "<div class='col-md-3 col-sm-6 col-xs-12'>" + item_content + "</div>";
		$j(this).replaceWith(new_content);
	});

	var count = 1;
	$j('.mega-menu > ul > div').each(function(){
		
		if( count % 2 == 0 ) {
			$j("<div class='clearfix visible-sm'></div>").insertAfter($j(this));
		}
		count++;
	});

	$j('.mega-menu>ul>div>ul>li').prepend('<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>');

	$j('.drop-menu').hover(display_sub_menu, hide_sub_menu);

	function display_sub_menu () {
		$j('.drop-menu').children('ul').css('display','block');
	}

	function hide_sub_menu () {
		$j('.drop-menu').children('ul').css('display','none');
	}

	$j('.drop-menu').each(function(){
		var left_pos = $j(this).offset().left;
		$j(this).children('ul').css('left', left_pos);
	});

	$j(window).resize(function() {
		
  		if ( $j(window).width() > 850) {
  			$j('#menu').css('display', 'block');
  		}

  		if ( $j(window).width() <= 850) {
  			$j('#menu').css('display', 'none');
  		}
  		location.reload();
	});

	var menu_icon = '<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>'

	$j('#side-nav ul li').has('ul').find('> a').append(menu_icon);
 
	
	
}