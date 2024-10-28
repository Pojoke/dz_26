<?php
function  um($vidpovid,$zna){
$vidpovid *=$zna;
return $vidpovid;
}
$arr=array(1,2,4,69,-3-50);
$filter=array_filter($arr, function($num){

    return $num > 0;});
echo array_reduce($filter, "um", 1);