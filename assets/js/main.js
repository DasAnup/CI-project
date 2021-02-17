
var $ = jQuery.noConflict();

$(document).ready(function() {
	
    $("#vid-carousel").owlCarousel({
        autoplay: false,
        items : 3, 
		navText: false,
		dots: false,       
		nav : true,
		mouseDrag:true,
		lazyLoad : false,
		responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
      });	
	  
    $("#cate-carousel").owlCarousel({
        autoplay: false,
        items : 3, 
		navText: false,
		dots: false,       
		nav : true,
		mouseDrag:true,
		lazyLoad : false,
		responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
      });	
			            
});

 $(window).load(function(){
  "use strict";
  
  	$('.auto-size').isotope({
	  itemSelector: '.masonry-item',
	  layoutMode: 'masonry'
	});	
	
 }); 