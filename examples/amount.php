<?php
include_once '../vendor/autoload.php';

$tron = new \IEXBase\TronAPI\Tron('4f7f258a-326f-43dd-8286-a8a4edf4c6b6');

/**
 * WARNING: When sending funds, you should not specify these parameters
 *
 * P.S: In the process of payment are automatically converted
*/

$from = $tron->toTron(1.15); //11500000
$to = $tron->fromTron(11500000); //1.15000000