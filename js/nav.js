$(function() {
  		$('.navbar').hide();
	    });
		
		
       
$(window).scroll(function(){  
    posScroll = $(document).scrollTop();  
    if(posScroll >=410)  
        $('.navbar').slideDown(400);  
    else  
        $('.navbar').slideUp(50);  
    });  