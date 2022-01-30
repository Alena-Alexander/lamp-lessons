<?php
function dolunch(){
    $text = "Time for lunch...";
    function lunchtime(&$text){
        echo $text;
    }
    lunchtime($text);
}
///////////////////////////////////////////////////////////
// function file_get_contents($file){
//     $myfile = fopen($file, "r") or die("Unable to open file...!");
//     $contents = fread($myfile, filesize($file));
//     fclose($myfile);
//     return $contents;
// }
