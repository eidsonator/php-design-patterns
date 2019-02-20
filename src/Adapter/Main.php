<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/19/19
 * Time: 7:22 PM
 */

require_once 'vendor/autoload.php';

$payPal =  new \App\Adapter\PayPalAdapter(new \App\Adapter\PayPal());

echo $payPal->pay(200);