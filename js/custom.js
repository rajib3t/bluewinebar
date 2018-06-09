(function($) {

	 "use strict";
	 
	 // preloader
	 
	 $('.loading').delay(1000).fadeOut(1000);
	 
	// fixed menu 
	
	$(window).scroll(function() {
		if($(this).scrollTop()>90) {
			$( ".header-section" ).addClass("fixed-nav");
		} else {
			$( ".header-section" ).removeClass("fixed-nav");
		}
	});
	
	//responsive menu
	
	  $('.slimmenu').slimmenu(
		{
			resizeWidth: '800',
			collapserTitle: 'Main Menu',
			animSpeed:'medium',
			indentChildren: true,
		});

    function miniblog_carousel(){

    $('#myCarousel').find('.carousel-item').first().addClass('active');	 
    
    $('#myCarousel').carousel({
    	interval: false
	});
  }
miniblog_carousel();





$('.carousel').carousel({
  interval: 2000
});
	
	// wow animation
	
	var wow = new WOW(
	  {
		animateClass: 'animated',
		offset:       200,
	  }
	);
	wow.init();
	
	//sroll to top
	
    function scroll_to_top() {
    var offset = 300,
      offset_opacity = 1200,
      scroll_top_duration = 700,
      windows = $(window),
      back_to_top = $('.themeix-top');
      windows.on("scroll", function() {
      ($(this).scrollTop() > offset) ? back_to_top.addClass('themeix-is-visible'): back_to_top.removeClass('themeix-is-visible themeix-fade-out');
      if ($(this).scrollTop() > offset_opacity) {
        back_to_top.addClass('themeix-fade-out');
      }
    });
    back_to_top.on('click', function(event) {
      event.preventDefault();
      $('body,html').animate({
        scrollTop: 0,
      }, scroll_top_duration);
    });
  }
  scroll_to_top();
  
	//animate slider captions 
	
	function doAnimations( elems ) {
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	var $myCarousel = $('#myCarousel'),
		$firstAnimatingElems = $myCarousel.find('.carousel-item:first').find("[data-animation ^= 'animated']");
	doAnimations($firstAnimatingElems);
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	}); 
	
	//myCarousel2
	
    $('#myCarousel2').carousel({
		interval:false
	});
	
	var clickEvent = false;
	$('#myCarousel2').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
	
	// google map 

	  if($("#map").length >0){

		  var map;
	      function initMap() {
	        map = new google.maps.Map(document.getElementById('map'), {
	          center: {lat: -34.397, lng: 150.644},
	          zoom: 8
	        });
	      }
		   
		   initMap();
	  }

	  
	  
//  ============= PORTFOLIO SLIDER FUNCTION =========

    $('.profiles-slider').slick({
        slidesToShow: 2,
        slck:true,
        slidesToScroll: 1,
        prevArrow:'<span class="slick-previous"></span>',
        nextArrow:'<span class="slick-nexti"></span>',
        autoplay: true,
        dots: false,
        autoplaySpeed: 2000,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]


    });	  
	  
	  
	  
	  
	  
	  

})(jQuery);