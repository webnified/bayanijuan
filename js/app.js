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
			$('.buttons').click(function(){
				var activeButton = $(this).attr('id');
				if(activeButton != "active"){
					$('#active').attr('id','');
					$(this).attr('id','active');					
				}
			});
			$.fn.fullpage.setKeyboardScrolling(false);
		});