<?php
$root_path = iconv('UTF-8', 'GB2312//IGNORE', "G:\云教室录像(存档)");
$file_path_array = glob($root_path . '\*');
usort($file_path_array, 'sortByDate');//根据日期排序

$count = 0;
foreach ($file_path_array as $dir_name) {
    $file_path = glob($dir_name . '\*\resource\videos\*.mp4');

    foreach ($file_path as $absolute_path) {
        $absolute_path_encode = iconv('GB2312', 'UTF-8//IGNORE', $absolute_path);
        $dir_name_encode = iconv('GB2312', 'UTF-8//IGNORE', substr($dir_name, 20));
        echo "<tr><td class='course_name'>" . substr($dir_name_encode, 0, strlen($dir_name_encode) - 9) . "</td><td class='course_date'>" . substr($dir_name_encode, -8)
            . "</td><td class='course_link'><a  target='_blank' href='" . $absolute_path_encode . "'>下载</a></td><td class='course_play'><a href='javascript:void(0)' value='".$absolute_path_encode."'>观看</a></td></tr>";

    }
    $count++;
    if ($count > 50) break;
}
function sortByDate($a, $b)
{
    $flagA = strpos(iconv('GB2312', 'UTF-8//IGNORE', $a), '_M');
    $flagB = strpos(iconv('GB2312', 'UTF-8//IGNORE', $b), '_M');
    return substr(iconv('GB2312', 'UTF-8//IGNORE', $a), $flagA - 8, 8) < substr(iconv('GB2312', 'UTF-8//IGNORE', $b), $flagB - 8, 8) ? 1 : -1;
}