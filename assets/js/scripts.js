jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });
  
 

});

// ajoute une classe pour les menu et le contact 

jQuery('.menu_trigger').click(function(){
	jQuery('body').toggleClass("expand-menu");
	 if(jQuery('body').hasClass("expand-menu")){
	  jQuery ('html').css('overflow', 'hidden');	  
	  }else{
	  jQuery ('html').css('overflow', 'visible');	  
	  }
	if(jQuery(window).width() <= 770 && jQuery('body').hasClass('expand-contact')){
	jQuery('body').toggleClass("expand-contact");
  // do your stuff
}
  });
  
jQuery('.contact_trigger').click(function(){
     jQuery('body').toggleClass("expand-contact");
     if(jQuery('body').hasClass("expand-contact")){
	  jQuery ('html').css('overflow', 'hidden');	  
	  }else{
	  jQuery ('html').css('overflow', 'visible');	  
	  }

         if(jQuery(window).width() <= 770 && jQuery('body').hasClass('expand-menu')){
	jQuery('body').toggleClass("expand-menu");
  // do your stuff
}

});

jQuery('.nav_image').click(function(){
	if(jQuery('body').hasClass("expand-contact")){
	jQuery('body').toggleClass("expand-contact");
	jQuery ('html').css('overflow', 'visible');}
	if(jQuery('body').hasClass("expand-menu")){
	jQuery('body').toggleClass("expand-menu");jQuery ('html').css('overflow', 'visible');}});
	

/*
jQuery(function($) {
    $(document).scroll(function () {
        var y = $(this).scrollTop();
        if (y > 150) {
            $('#main_navi').fadeOut();
        } else {
            $('#main_navi').fadeIn();
        }

    });
});
*/
//on supprime cette classe lorsque l'on ferme le menu

/*
jQuery('.expand-menu .menu_link').click(function(){
      jQuery('body').removeClass('expand-menu');
});

jQuery('.expand-contact .contact_link').click(function(){
      jQuery('body').removeClass('expand-contact');
});
*/

