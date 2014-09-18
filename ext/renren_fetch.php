<?php

    include_once('simple_html_dom.php');
    define('TIME_RULE','Y-m-d H:i');
    date_default_timezone_set('PRC');
    function select_image($content)
    {
        $context = array(
            'gdg'=>array('gdg'),
            'linux'=>array('linux'),
            'algorithm'=>array('算法导论'),
            'cpp'=>array('c++'),
            'lecture'=>array('讲座','講座','J705','活動','活动')
        );
        foreach($context as $key=>$arr) {
            foreach ($arr as $value) {
                if (stristr($content,$value)) {
                    return $key.'.png';
                }
            }
        }
        return 'default.png';
    }

    function renrenFetch($renrenURL = 'fdoings.html')
    {

        $html = file_get_html($renrenURL);
        $ariticle_list = array();
        foreach ($html->find('div.p-status-content dl') as $element) {
            $ariticle_data = array(
	            'aid'=>'',
	            'content'=>'',
	            'img'=>'',
	            'date'=>''
	        );
            $ariticle_data['aid'] = $element->id;
            $ariticle_data['aid'] = str_replace('sta_', '',$ariticle_data['aid']);
            $ariticle_data['content'] = strval($element->find('span.status-info',0));
            $ariticle_data['img'] = select_image($element->find('span.status-info',0)->plaintext);
            $ariticle_data['date'] = trim($element->find('span.pulish-time',0)->plaintext);
            $ariticle_list[] = $ariticle_data;
        }
        
        return $ariticle_data;
    }

    function renrenFetchAndPutContent($renrenURL = 'fdoings.html')
    {
        $ariticle_data = renrenFetch($renrenURL);
        
        if ($ariticle_list) {
            $json_file_name = 'ArticleFeedList.json';
            $ariticle_list_json = json_encode($ariticle_list);
            file_put_contents($json_file_name, $ariticle_list_json);
            file_put_contents('newest_feed_time',$ariticle_list[0]['date']);
            file_put_contents('latesttime',date(TIME_RULE));
            return 1;
        } else {
            return 0;
        }
    }

    /**
     *	function renrenUpdate()
     *	Update open-source community feed list in ArticleFeedList.json (call `renrenFetchAndPutContent` function)
     */
    function renrenUpdate() {
        if (renrenFetchAndPutContent('http://page.renren.com/601684970/channel-statuslist-0?pid=601684970') <=0){
            echo 'Error.';
        } else {
            echo 'Update Success ' . date(TIME_RULE);
        }
    }
?>