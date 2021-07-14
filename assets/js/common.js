

/* Back to top button, appear when scrolled down
-----------------------------------------------------------------------------------*/
var amountScrolled = 300;

jQuery(window).scroll(function() {
  if ( jQuery(window).scrollTop() > amountScrolled ) {
    jQuery('a.top-link').fadeIn('slow');
  } else {
    jQuery('a.top-link').fadeOut('slow');
  }
});


/* Fire off functions when document is ready
-----------------------------------------------------------------------------------*/
jQuery(document).ready(function(){


/* Scroll to top
-----------------------------------------------------------------------------------*/

jQuery('a[href^="#"]').on('click', function(event) {

    var target = jQuery( jQuery(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});

/* --------------------------------------------------------------------------------*/

jQuery( "input#0" ).prop( "checked", true );

/* Animate accordion menu
-----------------------------------------------------------------------------------*/

var accordionsMenu = jQuery('.accordion-menu');

  if( accordionsMenu.length > 0 ) {
    
    accordionsMenu.each(function(){
      var accordion = jQuery(this);
      //detect change in the input[type="checkbox"] value
      accordion.on('change', 'input[type="checkbox"]', function(){
        var checkbox = jQuery(this);
        console.log(checkbox.prop('checked'));
        ( checkbox.prop('checked') ) ? checkbox.siblings('.accordion-menu-item').attr('style', 'display:none;').slideDown(300) : checkbox.siblings('.accordion-menu-item').attr('style', 'display:block;').slideUp(300);
      });
    });
  }

/* --------------------------------------------------------------------------------*/


/* Women & Mens slidy thing!
-----------------------------------------------------------------------------------*/

jQuery('a.women').on('click', function(){
    jQuery('.superwidth').css('margin-left','0');
});
jQuery('a.men').on('click', function(){
    jQuery('.superwidth').css('margin-left','-88%');
});

/* --------------------------------------------------------------------------------*/


/* magazine slidey thing
-----------------------------------------------------------------------------------*/

jQuery('.cd-image-block ul > li:first').addClass('is-selected');
jQuery('.cd-content-block ul > li:first').addClass('is-selected');

/* --------------------------------------------------------------------------------*/



 

 



}); // end (document).ready(function)



jQuery(document).ready(function($){
  //store DOM elements
  var imageWrapper = $('.cd-images-list'),
    imagesList = imageWrapper.children('li'),
    contentWrapper = $('.cd-content-block'),
    contentList = contentWrapper.children('ul').eq(0).children('li'),
    blockNavigation = $('.block-navigation'),
    blockNavigationNext = blockNavigation.find('.cd-next'),
    blockNavigationPrev = blockNavigation.find('.cd-prev'),
    //used to check if the animation is running
    animating = false;

  //on mobile - open a single project content when selecting a project image
  imageWrapper.on('click', 'a', function(event){
    event.preventDefault();
    var device = MQ();
    
    (device == 'mobile') && updateBlock(imagesList.index($(this).parent('li')), 'mobile');
  });

  //on mobile - close visible project when clicking the .cd-close btn
  contentWrapper.on('click', '.cd-close', function(){
    var closeBtn = $(this);
    if( !animating ) {
      animating = true;
      
      closeBtn.removeClass('is-scaled-up').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        contentWrapper.removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
          animating = false;
        });

        $('.cd-image-block').removeClass('content-block-is-visible');
        closeBtn.off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
      });
    }
  });

  //on desktop - update visible project when clicking the .block-navigation
  blockNavigation.on('click', 'button', function(){
    var direction = $(this),
      indexVisibleblock = imagesList.index(imageWrapper.children('li.is-selected'));

    if( !direction.hasClass('inactive') ) {
      var index = ( direction.hasClass('cd-next') ) ? (indexVisibleblock + 1) : (indexVisibleblock - 1); 
      updateBlock(index);
    }
  });

  //on desktop - update visible project on keydown
  $(document).on('keydown', function(event){
    var device = MQ();
    if( event.which=='39' && !blockNavigationNext.hasClass('inactive') && device == 'desktop') {
      //go to next project
      updateBlock(imagesList.index(imageWrapper.children('li.is-selected')) + 1);
    } else if( event.which=='37' && !blockNavigationPrev.hasClass('inactive') && device == 'desktop' ) {
      //go to previous project
      updateBlock(imagesList.index(imageWrapper.children('li.is-selected')) - 1);
    }
  });

  function updateBlock(n, device) {
    if( !animating) {
      animating = true;
      var imageItem = imagesList.eq(n),
        contentItem = contentList.eq(n);
      
      classUpdate($([imageItem, contentItem]));
      
      if( device == 'mobile') {
        contentItem.scrollTop(0);
        $('.cd-image-block').addClass('content-block-is-visible');
        contentWrapper.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
          contentWrapper.find('.cd-close').addClass('is-scaled-up');
          animating = false;
        });
      } else {
        contentList.addClass('overflow-hidden');
        contentItem.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
          contentItem.siblings().scrollTop(0);
          contentList.removeClass('overflow-hidden');
          animating = false;
        });
      }

      //if browser doesn't support transition
      if( $('.no-csstransitions').length > 0 ) animating = false;

      updateBlockNavigation(n);
    }
  }

  function classUpdate(items) {
    items.each(function(){
      var item = $(this);
      item.addClass('is-selected').removeClass('move-left').siblings().removeClass('is-selected').end().prevAll().addClass('move-left').end().nextAll().removeClass('move-left');
    });
  }

  function updateBlockNavigation(n) {
    ( n == 0 ) ? blockNavigationPrev.addClass('inactive') : blockNavigationPrev.removeClass('inactive');
    ( n + 1 >= imagesList.length ) ? blockNavigationNext.addClass('inactive') : blockNavigationNext.removeClass('inactive');
  }

  function MQ() {
    return window.getComputedStyle(imageWrapper.get(0), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "").split(', ');
  }

});