<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/21/19
 * Time: 7:24 PM
 */

namespace App\Behavioral\ChainOfResponsibility;

class Lights extends HomeChecker
{

    public function check(HomeStatus $home): bool
    {
        if (!$home->lightsOff) {
            return false;
        }
        return $this->next($home);
    }
}