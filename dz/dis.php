<?php
// function discount1($price) {
// return $price - 20;
// }
// function discount2($price) {
// return $price / 2;
// }
// function getPrice($discount = null) {
// $price = 100;
// if (isset($discount))
// $price = call_user_func($discount, $price);
// return $price;
// }
// echo "Ціна: \$" . getPrice() . "\n";
// echo "Ціна зі знижкою: \$" . getPrice('discount1') . "\n";
// echo "Ціна зі знижкою за акцією: \$" . getPrice('discount2') . "\n";


function j($price) {
return $price;
}
function m($price) {
    return $price*2;
    }
    function s($price) {
        return $price*3;
        }
        function getPrice($zp = null) {
$price = 1000;
if (isset($zp))
$price = call_user_func($zp, $price);
return $price;
}
echo "Ціна: junior \$" . getPrice('j') . "\n";
echo "Ціна: midl \$" . getPrice('m') . "\n";
echo "Ціна senior \$" . getPrice('s') . "\n";