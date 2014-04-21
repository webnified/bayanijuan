$(document).ready(function (){			
			$('.fullpage').fullpage({
				scrollOverflow: true,
				resize: false
			});			
			$('.firstSlide').click(function(){
				$.fn.fullpage.moveTo(0,0);
			});
			$('.secondSlide').click(function(){
				$.fn.fullpage.moveTo(0,1);
			});
			$('.thirdSlide').click(function(){
				$.fn.fullpage.moveTo(0,2);
			});
			$.fn.fullpage.setKeyboardScrolling(false);
		});