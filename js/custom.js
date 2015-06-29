
/* ========================================================================
 * Home Page Journey Slider
 * ======================================================================== */
 $(document).ready(function($) {
    $(".tab_content").hide();
      $(".tab_content:first").show(); 
      $(".tabs li:first-child").addClass("active");

      $("ul.tabs li a").click(function() {
          $(".tab_content").hide();
           var activeTab = $(this).attr("rel"); 
          $("#"+activeTab).fadeIn(700); 
          $("ul.tabs li a").removeClass("active");
          $(this).addClass("active");
    });

    /* Next Prev JS */

    marginTopVal = 0;
    $(".journey-bottom-arrow").click(function() {
         activeItem = $('.active');
         nextItem = activeItem.next();
         if(nextItem.length){
          activeItem.removeClass('active');
          nextItem.addClass('active');
          marginTopVal -= 57;
          anchorTag = nextItem.children('a');
          anchorTag.trigger('click');
         $('.tabs').animate({ marginTop : marginTopVal + 'px'});
        } 
    });
    
    $(".journey-top-arrow").click(function() {
         activeItem = $('.active');
         prevItem = activeItem.prev();
         if(prevItem.length){
          activeItem.removeClass('active');
          prevItem.addClass('active');
          marginTopVal += 57;
         $('.tabs').animate({ marginTop : marginTopVal + 'px'});

          anchorTag = prevItem.children('a');
          anchorTag.trigger('click');
        }
    });
 });


      
/* ========================================================================
 * HOME PAGE STICKEY HEADER ANIMATION
 * ======================================================================== */
var previousScroll = 0,
headerOrgOffset = $('#stickey_header').offset().top;

$('#stickey_wrap').height($('#stickey_header').height());

$(window).scroll(function() {
    var currentScroll = $(this).scrollTop();
    console.log(currentScroll + " and " + previousScroll + " and " + headerOrgOffset);
    if(currentScroll > headerOrgOffset) {
        if (currentScroll > previousScroll) {
            $('#stickey_header').fadeOut(900);
        } else {
            $('#stickey_header').fadeIn(900);
            $('#stickey_header').addClass('fixed');
        }
    } else {
         $('#stickey_header').removeClass('fixed');   
    }
    previousScroll = currentScroll;
});

/* ========================================================================
 * About Us Company Profile Slide
 * ======================================================================== */


 $(document).ready(function($) {
    $('.next-tab').click(function(event) {
        that = $(this);
        currentTab = $('.about-container.active');
        nextTab = currentTab.next('.about-container');
        nextToNext = null;

        if(!nextTab.length){
          nextTab = $('.about-container').first();
          nextToNext = nextTab.next();
        }else{
          nextToNext = nextTab.next('.about-container').length ? nextTab.next('.about-container') : $('.about-container').first();
        }
        currentTab.fadeOut(200, function() {
            currentTab.removeClass('active');
            nextTab.fadeIn(200, function() {
              nextTab.addClass('active');
          });
        }); 

        $('.next-tab').find('.next-tab-title').text(nextToNext.data('title'));
        $('.prev-tab').find('.prev-tab-title').text(currentTab.data('title'));
    });
});

  $(document).ready(function($) {
    $('.prev-tab').click(function(event) {
        that = $(this);
        currentTab = $('.about-container.active');
        prevTab = currentTab.prev('.about-container');
        prevToPrev = null;

        if(!prevTab.length){
          prevTab = $('.about-container').last();
          prevToPrev = prevTab.prev();
        }else{
          prevToPrev = prevTab.prev('.about-container').length ? prevTab.prev('.about-container') : $('.about-container').last();
        }
        currentTab.fadeOut(200, function() {
            currentTab.removeClass('active');
            prevTab.fadeIn(200, function() {
              prevTab.addClass('active');
          });
        }); 

        $('.prev-tab').find('.prev-tab-title').text(prevToPrev.data('title'));
        $('.next-tab').find('.next-tab-title').text(currentTab.data('title'));
        
    });
});


/* ========================================================================
 * food services page on Click of Down Page 
 * ======================================================================== */

  jQuery('.down-arrow a').click(function(event) {
    aboutSection = jQuery('.food-services-cat');
    jQuery('body').animate({scrollTop: aboutSection.offset().top - 30}, '500', 'swing');
  });






