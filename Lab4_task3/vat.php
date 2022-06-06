<?php


$vat = 15;

$price = 1000;

$vat = ($price / 100) * $vat;

$totalPrice = $price + $vat;

echo number_format($totalPrice, 2);

?>