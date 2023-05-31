jQuery(function($){
	"use strict";
	
});

jQuery(function($){
  $( '.toggle-nav button' ).click( function(e){
    $( 'body' ).toggleClass( 'show-main-menu' );
    var element = $( '.sidenav' );
    medical_care_trapFocus( element );
  });

  $( '.close-button' ).click( function(e){
    $( '.toggle-nav button' ).click();
    $( '.toggle-nav button' ).focus();
  });
  $( document ).on( 'keyup',function(evt) {
    if ( $( 'body' ).hasClass( 'show-main-menu' ) && evt.keyCode == 27 ) {
      $( '.toggle-nav button' ).click();
      $( '.toggle-nav button' ).focus();
    }
  });
});

jQuery(window).scroll(function(){
	if (jQuery(this).scrollTop() > 200) {
		jQuery('.menu_box').addClass('fixed');
	} else {
  		jQuery('.menu_box').removeClass('fixed');
	}
});

jQuery(window).load(function() {
	jQuery(".preloader").delay(2000).fadeOut("slow");
});

jQuery(window).scroll(function(){
  if (jQuery(this).scrollTop() > 100) {
    jQuery('.scrollup').addClass('is-active');
  } else {
      jQuery('.scrollup').removeClass('is-active');
  }
});

jQuery( document ).ready(function() {
  jQuery('#medical-care-scroll-to-top').click(function (argument) {
    jQuery("html, body").animate({
           scrollTop: 0
       }, 600);
  })
})