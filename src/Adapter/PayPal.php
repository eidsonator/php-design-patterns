<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/19/19
 * Time: 7:19 PM
 */

namespace App\Adapter;

class PayPal
{
    public function sendMoney($amount)
    {
        return "Sent $amount";
    }
}