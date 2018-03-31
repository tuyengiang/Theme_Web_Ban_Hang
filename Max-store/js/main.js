/**slider**/
$(document).ready(function(){
	    $('.bx-slider').bxSlider({
	    	auto:true
	    });

  });
/**back-top**/
$(document).ready(function(){
	if($(window).scrollTop() > 300){
		$('.back-top').fadeIn();
	}else{
		$('.back-top').fadeOut();
	}

	$(window).scroll(function () {
	        if ($(this).scrollTop() > 300) {
			$('.back-top').fadeIn();
	        } else {
	            	$('.back-top').fadeOut();
	        }
	});
 
	$('.back-top').click(function () {
	        $("html, body").animate({
	            	scrollTop: 0
	        }, 600);
	        return false;
	});
});
/** fixed-menu** */
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>300){
			$('.menu').addClass("menu-fixed");
		}else{
			$('.menu').removeClass("menu-fixed");
		}
	});
});
/**chuyen-muc**/
$(document).ready(function(){
	 $('.menu-category').hover(function(){
	    	$('.chuyen-muc').css('display','block');
	    	$('.chuyen-muc').hover(function(){
	    		$('.chuyen-muc').css('display','block');
	    	},function(){
	    		$('.chuyen-muc').css('display','none');
	    	});
	   },function(){
	   	$('.chuyen-muc').css('display','none');
	   });
});

/**dang-nhap**/
$(document).ready(function(){
	$('.click-login').click(function(){
		$('.dang-nhap').fadeIn(300);
	});
});

$(document).ready(function(){
	$('.exit').click(function(){
		$('.dang-nhap').fadeOut(300);
	});
});