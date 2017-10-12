<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 11.10.17
 * Time: 22.29
 */
$MyPath=__DIR__;
echo "\r\n".$MyPath."\r\n";

function opener($MyPath,$CountOfPlus)
{
    $AllFileInMyFolder=scandir($MyPath);
    for ($i = 2; $i < count($AllFileInMyFolder); $i++) {
        echo  $CountOfPlus."$MyPath" . '/' . "$AllFileInMyFolder[$i]" . "\r\n";
        if (is_dir("$MyPath" . '/' . "$AllFileInMyFolder[$i]") == true) {
            opener($MyPath .'/' . $AllFileInMyFolder[$i],$CountOfPlus.'------');
        }
    }
}
opener($MyPath,'------');


