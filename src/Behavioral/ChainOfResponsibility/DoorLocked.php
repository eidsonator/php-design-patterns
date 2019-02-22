<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/21/19
 * Time: 7:45 PM
 */

namespace App\Behavioral\ChainOfResponsibility;

class DoorLocked extends  HomeChecker
{

    public function check(HomeStatus $home): bool
    {
        return $home->doorLocked === false ? false : $this->next($home);
    }
}