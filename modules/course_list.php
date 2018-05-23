<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/23
 * Time: 16:32
 */
header("Content-type: text/html; charset=utf-8");
$path = iconv("UTF-8", "GBK", "G:\云教室录像(存档)");//解决中文路径不能打开的bug
if (@$handle = opendir($path)) { //注意这里要加一个@，不然会有warning错误提示：）
    $array = array();
    while (($file = readdir($handle)) != false) {
        $dir = mb_convert_encoding($file, 'UTF-8', 'GBK');
        if ($dir == '.' || $dir == '..') continue;
        $array[] = substr($dir, strlen($dir) - 8) . '<br>';
        //echo $dir . '<br>';
    }
    rsort($array);
    print_r($array);
    closedir($handle);
}
