$(document).ready(function(){


	$('.nav .list li a').click(function(){
		var a = $(this).attr('title');	
		$('.content .contents').fadeOut(500);
		$('.content .'+a).delay(300).show('slide');	
	});	

});