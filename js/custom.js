
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
          marginTopVal -= 27;
          anchorTag = nextItem.children('a');
          anchorTag.trigger('click');
         $('.tabs').css({ marginTop : marginTopVal + 'px'});
        } 
    });
    
    $(".journey-top-arrow").click(function() {
         activeItem = $('.active');
         prevItem = activeItem.prev();
         if(prevItem.length){
          activeItem.removeClass('active');
          prevItem.addClass('active');
          marginTopVal += 27;
         $('.tabs').css({ marginTop : marginTopVal + 'px'});

          anchorTag = prevItem.children('a');
          anchorTag.trigger('click');
        }
    });
 });


      
/* ========================================================================
 * HOME PAGE HEADER ANIMATION
 * ======================================================================== */



/* ========================================================================
 * About Us Company Profile Slide
 * ======================================================================== */


 $(document).ready(function($) {
    $(".about-container").hide();
      $(".about-container:first").show(); 
      $(".our-origin a:first-child").addClass("active");

      $(".our-origin a").click(function() {
          $(".about-container").hide();
           var activeTab = $(this).attr("rel"); 
          $("#"+activeTab).fadeIn(1000); 
          $(".our-origin a").removeClass("active");
          $(this).addClass("active");
    });
});
  $(document).ready(function($) {
    $(".about-container").hide();
      $(".about-container:first").show(); 
      $(".our-vision a:first-child").addClass("active");

      $(".our-vision a").click(function() {
          $(".about-container").hide();
           var activeTab = $(this).attr("rel"); 
          $("#"+activeTab).fadeIn(1000); 
          $(".our-vision a").removeClass("active");
          $(this).addClass("active");
    });
});

/* ========================================================================
 * news pagination 
 * ======================================================================== */
  
 // init bootpag
        // $('#page-selection').bootpag({
        //     total: 7,
        //     next: '<img src="images/news/next.png" alt=""/>',
        //      prev: '<img src="images/news/prev.png" alt=""/>',
        // }).on("page", function(event, /* page number here */ num){
        //       $("#content").fadeOut(300,function(){
        //       $("#content").html($("#product-" + num ).html()).fadeIn(300);
        //     });
        // });


/* ========================================================================
 * food services page on Click of Down Page 
 * ======================================================================== */

  jQuery('.down-arrow a').click(function(event) {
    aboutSection = jQuery('.food-services-cat');
    jQuery('body').animate({scrollTop: aboutSection.offset().top - 30}, '500', 'swing');
  });






