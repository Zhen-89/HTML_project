(function ($) {

"use strict";





	/* Preloader */

	var win = $(window);

	win.on('load',function() {

		$('.page-loader').delay(350).fadeOut('slow');

	});



	/* menu last class added */

	$('ul.basic-menu>li').slice(-2).addClass('menu-p-right');





	/* TOP Menu Stick  */

	win.on('scroll',function() {

	if ($(this).scrollTop() > 1){

		$('#sticky-header').addClass("sticky");

	  }

	  else{

		$('#sticky-header').removeClass("sticky");

	  }

	});



	/* meanmenu */

	 $('#mobile-nav').meanmenu({

		 meanMenuContainer: '.basic-mobile-menu',

		 meanScreenWidth: "767"

	 });



	/* hamburgers menu option  */

    $('.hamburger').on('click', function() {

        $(this).toggleClass('is-active');

        $(this).next().toggleClass('nav-menu-show')

    });







	/* imagesLoaded active */

	$('#portfolio-grid,.blog-masonry').imagesLoaded( function() {



		/* Filter menu */

		$('.filter-menu').on( 'click', 'button', function() {

		  var filterValue = $(this).attr('data-filter');

		  $grid.isotope({ filter: filterValue });

		});



		/* filter menu active class  */

		$('.filter-menu button').on('click', function(event) {

			$(this).siblings('.active').removeClass('active');

			$(this).addClass('active');

			event.preventDefault();

		});



		/* Filter active */

		var $grid = $('#portfolio-grid').isotope({

		  itemSelector: '.portfolio-item',

		  percentPosition: true,

		  masonry: {

			columnWidth: '.portfolio-item',

		  }

		});



		/* Filter active */

		$('.blog-masonry').isotope({

		  itemSelector: '.blog-item',

		  percentPosition: true,

		  masonry: {

			columnWidth: '.blog-item',

		  }

		});



	});







	/* magnificPopup img view */

	$('.popup-link').magnificPopup({

		type: 'image',

		gallery: {

		  enabled: true

		}

	});



	/* magnificPopup video view */

	$('.popup-video').magnificPopup({

		type: 'iframe'

	});



	/* counterUp */

	$('.counter').counterUp();



	/* main-slider */

	$('.slider-active').owlCarousel({

		loop:true,

		navText:['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],

		nav:true,

		animateOut: 'fadeOut',

		responsive:{

			0:{

				items:1

			},

			600:{

				items:1

			},

			1000:{

				items:1

			}

		}

	})



	/* portfolio-slider */

	$('.portfolio-slider').owlCarousel({

		loop:true,

		navText:['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],

		nav:true,

		responsive:{

			0:{

				items:1

			},

			600:{

				items:1

			},

			1000:{

				items:1

			}

		}

	})



	/* portfolio-slider */

	$('#related-active').owlCarousel({

		loop:true,

		margin:30,

		navText:['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],

		nav:true,

		responsive:{

			0:{

				items:1

			},

			450:{

				items:2

			},

			768:{

				items:3

			},

			900:{

				items:4

			},

			1100:{

				items:4

			}

		}

	})



	/* portfolio-slider */

	$('.blog-slider').owlCarousel({

		loop:true,

		navText:['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],

		nav:true,

		autoplay:true,

		animateOut: 'fadeOut',

		responsive:{

			0:{

				items:1

			},

			768:{

				items:1

			},

			1000:{

				items:1

			}

		}

	})



	/* portfolio-slider */

	$('.clients-active').owlCarousel({

		loop:true,

		navText:['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],

		nav:true,

		autoplay:true,

		animateOut: 'fadeOut',

		responsive:{

			0:{

				items:2

			},

			450:{

				items:3

			},

			768:{

				items:4

			},

			1000:{

				items:6

			}

		}

	})



	/* portfolio-slider */

	$('.testimonial-active').owlCarousel({

		loop:true,

		navText:['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],

		nav:true,

		autoplay:true,

		responsive:{

			0:{

				items:1

			},

			450:{

				items:1

			},

			768:{

				items:1

			},

			1000:{

				items:1

			}

		}

	})



	/* related-post-active */

	$('.related-post-active').owlCarousel({

		loop:true,

		margin:20,

		navText:['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],

		nav:false,

		autoplay:true,

		responsive:{

			0:{

				items:1

			},

			450:{

				items:2

			},

			768:{

				items:2

			},

			1000:{

				items:3

			}

		}

	})



	$.scrollUp({

		scrollName: 'scrollUp', // Element ID

		topDistance: '300', // Distance from top before showing element (px)

		topSpeed: 300, // Speed back to top (ms)

		animation: 'fade', // Fade, slide, none

		animationInSpeed: 1000, // Animation in speed (ms)

		animationOutSpeed: 1000, // Animation out speed (ms)

		scrollText: '<i class="ion-chevron-up"></i>', // Text for element

	});





   /*  youtube video */

    $('.youtube-bg').YTPlayer({

        videoURL: "r4dD-WYzrMs",

        containment: '.youtube-bg',

        autoPlay: true,

        loop: true,

		mute:true

    });

/* */








})(jQuery);

// scroll to specific position  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// *****************************************************************************
var mybutton0 = document.getElementById("scrollHotsell");
var mybutton1 = document.getElementById("scrollDiscount");
// When the user scrolls down 0px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop >= 0 || document.documentElement.scrollTop >= 0) {
    mybutton0.style.display = "block";
	mybutton1.style.display = "block";
  } else {
    mybutton0.style.display = "none";
	mybutton1.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction0() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 580;
}
function topFunction1() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 1000;
}

$(document).ready(function(){
	// Add smooth scrolling to all links
	$("input").on('click', function(event) {
  
	  // Make sure this.hash has a value before overriding default behavior
	  if (this.hash !== "") {
		// Prevent default anchor click behavior
		event.preventDefault();
  
		// Store hash
		var hash = this.hash;
  
		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		$('html, body').animate({
		  scrollTop: $(hash).offset().top
		}, 500, function(){
	 
		  // Add hash (#) to URL when done scrolling (default click behavior)
		  window.location.hash = hash;
		});
	  } // End if
	});
  });
