		$(document).ready(function(){
			
			$('#photos ul li').click(function(){
					var a = $(this).attr('title');
					
					$('.bg').hide(0.1).fadeIn(1000).css({"background-image": "url(image/"+a+")" 	});
					console.log(a);

			});
			

        });