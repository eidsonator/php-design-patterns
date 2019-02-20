<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/18/19
 * Time: 3:41 PM
 */

namespace App\Facade;

class Mortgage
{
    public static function apply($ssn) {
        $bank = new Bank($ssn);
        $credit = new Credit($ssn);
        $backgroundCheck = new BackgroundCheck($ssn);
        return $bank->approve() && $credit->approve() && $backgroundCheck->process();
    }
}