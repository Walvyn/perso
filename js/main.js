$(document).ready(function(){
	// Menu //

	$(".button-collapse").sideNav();

	var prevBottom = 0;

	$("header li").each(function(){
		var height = ($($(this).children('a').attr('href')).height()/3);
		var top = $($(this).children('a').attr('href')).offset().top;

		if(window.pageYOffset >= top-prevBottom && (height*2)+top >= window.pageYOffset){
			$(this).addClass('active');
			return false;
		}

		prevBottom = height;
	});

	// --- //

	// Navigation //

	var scroll = false;
	var keys = [37, 38, 39, 40];

	function scrollAnimate(offsetY){
		scroll = true;
		disable_scroll();

		$('html, body').animate(
			{
				scrollTop: offsetY,
				easing: 'linear'
			},
			{
				complete: setScroll
			},
			800
		);
	}

	function setScroll(){
		scroll = false;
		enable_scroll();
	}

	function preventDefault(e){
	  e = e || window.event;

	  if(e.preventDefault){
	      e.preventDefault();
	  }

	  e.returnValue = false;
	}

	function keydown(e){
	    for(var i = keys.length; i--;){
	        if(e.keyCode === keys[i]){
	            preventDefault(e);
	            return;
	        }
	    }
	}

	function wheel(e){
		preventDefault(e);
	}

	function disable_scroll(){
	  if(window.addEventListener){
	      window.addEventListener('DOMMouseScroll', wheel, false);
	  }
	  window.onmousewheel = document.onmousewheel = wheel;
	  document.onkeydown = keydown;
	}

	function enable_scroll(){
	    if(window.removeEventListener){
	        window.removeEventListener('DOMMouseScroll', wheel, false);
	    }

	    window.onmousewheel = document.onmousewheel = document.onkeydown = null;
	}

	/* click change active */

	$('header li').click(function(){
		if(window.pageYOffset != $($(this).children('a').attr('href')).offset().top){
			scrollAnimate($($(this).children('a').attr('href')).offset().top);

			$('header li.active').removeClass('active');
			$(this).addClass('active');
		}

		return false;
	});

	/* scroll change active */

	$(window).scroll(function(){
		if(!scroll){
			var next = ($($('header li.active').children('a').attr('href')).height()/3)*2 + $($('header li.active').children('a').attr('href')).offset().top;

			if($('header li.active').prev().length != 0){
				var prev = ($($('header li.active').prev().children('a').attr('href')).height()/3)*2 + $($('header li.active').prev().children('a').attr('href')).offset().top;
			} else {
				var prev = ($($('header li.active').prev().children('a').attr('href')).height()/3)*2;
			}

			if(window.pageYOffset > next){
				var side = $('header li.active').next();
	    		$('header li.active').removeClass('active');
				side.addClass('active');
			} else if(window.pageYOffset < prev){
				var side = $('header li.active').prev();
	    		$('header li.active').removeClass('active');
				side.addClass('active');
			}
		}
	});

	// --- //
});
