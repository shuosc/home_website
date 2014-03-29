jQuery(function($){
	var i=1;
	var index=1;
	var num=$('.turnto_box li').length;
	var img_height_pos = '375px';
	var img_height_neg = '-375px';

	$("#img_1").eq(0).css({'z-index':'2'});
	$('.turnto_point>li').click(function(){
			//��ȡLIԪ��ID��ĳ���
			//var $point_len = $(this).attr('class').length; 
			//��ȡ��ID������һ���ַ�
			//var $point_id = $(this).attr('class').substring($point_len-1);

			$point_id = $(this).prevAll().size()+1;
			//$('.turnto_point>li').css({'background-position':'center top'});
			//�����IF��Ϊ��ʹͼƬ���ƶ����νӷ��ǰ������趨
			if($point_id>i)
			{
			$('.img_box img').not('#img_'+i).css({'top':img_height_pos});
			$('#img_'+i).animate({top:img_height_neg},500);
			}
			else if($point_id<i)
			{
			$('.img_box img').not('#img_'+i).css({'top':img_height_neg});
			$('#img_'+i).animate({top:img_height_pos},500);		
			}
			//��i���������趨����Ӧ�Զ���ת����ı仯
			i = $point_id;
			$('#img_'+i).animate({top:'0px'},500);		
			//$.point_tri($point_id);
			$.data_load(i);
		})
	$.extend({'data_load':function(i){
			var $con=$('#content_'+i).html();
			$('.content_box').html('').html($con);
		}})

	$.extend({'left_tri':function(){
		if(!$('.img_box>img').is(':animated'))
		{
			//����ʾͼƬ�������ͼƬ��CSS�趨
			$('.img_box img').not('#img_'+i).css({'top':img_height_pos});
			//��ʾ��ͼƬ�Ķ���
			$('#img_'+i).animate({top:img_height_neg},500);
			//��Ӧ��ת���CSS�ĸı�
			//$('.turnto_point>li').css({'background-position':'center top'});
			//��Ԫ�ж�
			i==num?i=1:i++;
			//�������ֵ�ͼƬ�Ķ���
			$('#img_'+i).animate({top:'0px'},500);
			//�����Լ���ת�㺯��ĵ���
			$.data_load(i);
			
		}
	
		$('.mCSB_container').animate({'top':0-index*121+'px'});
		index++;
		index==num?index=0:index=index;
	}})
	var $time_set=setInterval('$.left_tri()','4000');
	//������ͣ����ת������ͣ
	$('.content_box,.turnto_box').hover(function(){
			//���ʱ���趨
			clearInterval($time_set);
		},function(){
			//����
			$time_set = setInterval('$.left_tri()','4000');		
		});

})