<?php
error_reporting(0);
setlocale(LC_MONETARY, 'en_US.UTF-8');

$wallet = $_GET["wallet"]; 
$ctprice = $_GET["ctprice"];
$ctprice_f = $_GET["ctprice_future"];


// CTPRICE = PRICE PER COIN/TOKEN
// CT = COINS/TOKEN

$ct = $wallet / $ctprice;
$ct_future = $wallet / $ctprice_f;
$wallet_future = ($ct/$ct_future)*$wallet;
$profit = $wallet_future - $wallet;
$x = $ct / $ct_future;
$percent = ($x) * 10;

$data["ct"] = number_format($ct, 3,'.', ',');
$data["ctFuture"] = number_format($ct_future, 3,'.', ',');
$data["walletFuture"] = number_format($wallet_future, 2,'.', ',');

$data["profit"] = number_format($profit, 2,'.', ',');
$data["x"] = number_format($x, 0,'.', ',')."x";
$data["percent"] = number_format($percent, 2,'.', ',')."%";

echo json_encode($data);


?>