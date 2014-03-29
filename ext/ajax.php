<?php
    header("Content-type: text/plain");
    include_once('renren_fetch.php');

    $str_json = file_get_contents('ArticleFeedList.json');
    $info_json = json_decode($str_json,true);
    if (isset($_GET['date']) && isset($_GET['aid'])) {
        $client_date_stamp = intval($_GET['date']);
        $client_date_str = date(TIME_RULE,intval($_GET['date']));

//        $client_date = DateTime::createFromFormat(TIME_RULE,$client_date_str);
        $new_arr = array();
        foreach ($info_json as $article_feed) {
//            $article_date = DateTime::createFromFormat(TIME_RULE,$article_feed['date']);
            $article_date_stamp = strtotime($article_feed['date']);
            if ($client_date_stamp < $article_date_stamp && $article_feed['aid'] != trim($_GET['aid'])) {
                $new_arr[] = $article_feed;
            } else {
                break;
            }
        }
        if ($new_arr) {
            $str_json = json_encode($new_arr);
            echo $str_json;
        }
    } else if (isset($_GET['num'])) {
        $num = intval(trim($_GET['num']));
        if ($num > 0) {
            $new_arr = array();
            for ($i=0;$i<$num;$i++) {
                $new_arr[$i] = $info_json[$i];
            }

        }
        if ($new_arr) {
            $str_json = json_encode($new_arr);
            echo $str_json;
        }
    }
