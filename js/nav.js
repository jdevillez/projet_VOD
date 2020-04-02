$(function() {
  		$('.navbarp').hide();
	    });

$(window).scroll(function(){  
    posScroll = $(document).scrollTop();  
    if(posScroll >=400)  
        $('.navbarp').slideDown(400);
    else  
        $('.navbarp').slideUp(50);  
    });