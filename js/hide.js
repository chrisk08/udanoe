jQuery.noConflict(); 
var positionElementInPage = jQuery('.titreprinci').offset().top; //L'élement qui cacher va faire apparaitre les block
    jQuery(window).scroll(
      function() {
        if (jQuery(window).scrollTop() >= positionElementInPage) {
    
          jQuery('#moncercle').fadeIn(1000,'linear');

        } else {
          
          jQuery('#moncercle').fadeOut(1000,'swing');
        }
      }
    );
