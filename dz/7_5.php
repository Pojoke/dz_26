<?php
function  um($vidpovid,$zna){
$vidpovid *=$zna;
return $vidpovid;
}
$arr=array(1,2,4,69,-3-50);
// $n=array();
echo array_reduce($arr, "um", 1);