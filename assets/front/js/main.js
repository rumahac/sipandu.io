(function ($) {
	"use strict";

    jQuery(document).ready(function($){

    	//---------Menu responsive-----------
    	$(".mainmenu").meanmenu({
			meanMenuClose: 'X', 
			meanMenuCloseSize: '18px', 
			meanScreenWidth: '767', 
			meanExpandableChildren: true, 
			meanMenuContainer: '.mobileMenuActive', 
			onePage: true
		});

	    //---------venobox-----------
        $('.venobox').venobox();

        //---------CounterUp-----------
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        //-----------App Screen Carousel-----------
		$(".app-screen-carousel").owlCarousel({
		    items: 5,
		    autoplay: true,
		    margin: 10,
			loop: true,
			nav: false,
			dots: false,
		    smartSpeed: 800,
		    responsive : {
				0 : {
					items: 1,
				},
				
				576 : {
					items: 3,
				},
				768 : {
					items: 3,
				},
				992 : {
					items: 5,
				},
				1200 : {
					items: 5
				}
			}
		});

		//-----------Testimonial Carousel-----------
	    $(".testimonial-carousel").owlCarousel({
	        items: 1,
	        loop: true,
	        dots: true,
	        nav: false,
	        autoplay: true,
	        // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	        smartSpeed: 1200
	    });

	    //-----------Google Map-----------


        /* Website Scrolling */
		$('ul.header-ul a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 5000,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});

		/* Website Scroll bottom to top */
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			});

			$('.scrollup').click(function () {
				$("html, body").animate({
					scrollTop: 0
				}, 600);
				return false;
			});

		/* Animation */	
		new WOW().init();

    });


    $(window).on('load', function() { 
	  $('.app-site-preloader-wrap').fadeOut(1000);
	})
	

}(jQuery));