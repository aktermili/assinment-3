<?php
$text= "The quick brown fox jumps over the lazy dog.";

function stringLowercase($text){
    $lowercase=strtolower($text);
    $search="brown";
    $replace="red";
    $modifiedText=str_replace($search ,$replace,$lowercase );
    return  $modifiedText;
}
$modifiedText= stringLowercase($text);
echo $modifiedText; 
?>