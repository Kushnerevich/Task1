<?php
declare(strict_types=1);

$myPath=__DIR__;

function checkBrowser ():string {
    if (isset($_SERVER['HTTP_USER_AGENT'])){
        return $hypehenation="</br>";
    }else {
        return $hypehenation="\r\n";
    }
}

$hypehenation=checkBrowser();
echo $hypehenation.$myPath.$hypehenation;

function inputFile(string $myPath,string $countOfPlus,string $hypehenation){

    $allFileInMyFolder=scandir($myPath);
    for ($i = 2; $i < count($allFileInMyFolder); $i++) {
        echo  $countOfPlus."$myPath" . '/' . "$allFileInMyFolder[$i]" . $hypehenation;
        if (is_dir("$myPath" . '/' . "$allFileInMyFolder[$i]") === true) {
            inputFile($myPath .'/' . $allFileInMyFolder[$i],$countOfPlus.'------',$hypehenation);
        }
    }
}
inputFile($myPath,'------',$hypehenation);


