<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/21/19
 * Time: 7:16 PM
 */

namespace App\Behavioral\ChainOfResponsibility;

class Alarm extends HomeChecker
{

    public function check(HomeStatus $home): bool
    {
        if (!$home->alarmOn) {
            return false;
        }
        return $this->next($home);
    }
}