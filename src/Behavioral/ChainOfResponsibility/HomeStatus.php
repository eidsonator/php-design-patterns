<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/21/19
 * Time: 7:07 PM
 */

namespace App\Behavioral\ChainOfResponsibility;

class HomeStatus
{
    public $alarmOn;
    public $doorLocked;
    public $lightsOff;

    public function __construct($alarmOn, $doorLocked, $lightsOff){
        $this->alarmOn = $alarmOn;
        $this->doorLocked = $doorLocked;
        $this->lightsOff = $lightsOff;
    }

}