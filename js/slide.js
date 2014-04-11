jQuery(function($){
	var i = 0; // current index
	var num = $('.turnto_box li').length;
	var img_height_pos = '375px';
	var img_height_neg = '-375px';
	$("#img_1").eq(0).css({'z-index':'2'});

	$('.turnto_point>li').map(function(index, dom){
		$(dom).click(function(){
			if (index == i) {
				return;
			};
			i = index;
			$.slide_turn_to(i);
		});
	});

	$.extend({'slide_turn_to':function(i){
		$('.img_box img').slice(0, i).stop().animate({top: img_height_neg}, 500);
		$('.img_box img').slice(i, i + 1).stop().animate({top:'0px'},500);
		$('.img_box img').slice(i + 1).stop().animate({top: img_height_pos}, 500);
		
		var con = $('#text_content div').slice(i, i + 1).html();
		$('.content_box').html('').html(con);
	}});

	$.extend({'left_tri':function(){
		i++;
		if (i == num){
			i = 0;
		}
		$.slide_turn_to(i);
		$('.turnto_point').mCustomScrollbar("scrollTo", $(".turnto_point li").slice(i, i + 1).position().top);

	}});

	var $time_set = setInterval($.left_tri, 4000);
	$('.content_box,.turnto_box').hover(function(){
		clearInterval($time_set);
	},function(){
		$time_set = setInterval($.left_tri, 4000);
	});

})