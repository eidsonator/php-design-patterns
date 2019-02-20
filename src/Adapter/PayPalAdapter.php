<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/19/19
 * Time: 7:20 PM
 */

namespace App\Adapter;

class PayPalAdapter
{
    private $payPal;

    public function __construct(PayPal $payPal)
    {
        $this->payPal = $payPal;
    }

    public function pay($amount)
    {
        return $this->payPal->sendMoney($amount);
    }
}