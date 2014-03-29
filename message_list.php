<?php
/**
 * Created by JetBrains PhpStorm.
 * User: grzhan
 * Date: 13-12-16
 * Time: 上午8:31
 * To change this template use File | Settings | File Templates.
 */
    define("MSGN","5");

    //  更新服务器端的抓取信息
    require_once("ext/renren_fetch.php");

    $result = array();
    $json_str = file_get_contents("ext/ArticleFeedList.json");
    $json = json_decode($json_str, true);
    $i = 0;
    for ($i = 0; $i<intval(MSGN); ++$i)
        $result[] = $json[$i];





