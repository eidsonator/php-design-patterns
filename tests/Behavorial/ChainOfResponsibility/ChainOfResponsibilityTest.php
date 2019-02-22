<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/21/19
 * Time: 7:21 PM
 */

namespace Tests\Behavorial\ChainOfResponsibility;

use App\Behavioral\ChainOfResponsibility\Alarm;
use App\Behavioral\ChainOfResponsibility\DoorLocked;
use App\Behavioral\ChainOfResponsibility\HomeStatus;
use App\Behavioral\ChainOfResponsibility\Lights;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    public function testAlarmSet()
    {
        $home = new HomeStatus(true, false, false);
        $alarm = new Alarm();
        $this->assertTrue($alarm->check($home));
    }

    public function testAlarmNotSet()
    {
        $home = new HomeStatus(false, false, false);
        $alarm = new Alarm();
        $this->assertFalse($alarm->check($home));
    }

    public function testLightsAndAlarmGood()
    {
        $home = new HomeStatus(true, false, true);
        $alarm = new Alarm();
        $alarm->succeedWith(new Lights());
        $this->assertTrue($alarm->check($home));
    }

    public function testAlarmGoodLightsNoGood()
    {
        $home = new HomeStatus(true, false, false);
        $alarm = new Alarm();
        $alarm->succeedWith(new Lights());
        $this->assertFalse($alarm->check($home));
    }


    public function testDoorAndLightsAndAlarmGood()
    {
        $home = new HomeStatus(true, true, true);
        $alarm = new Alarm();
        $lights = new Lights();
        $door = new DoorLocked();
        $alarm->succeedWith($lights);
        $lights->succeedWith($door);

        $this->assertTrue($alarm->check($home));
    }

    public function testDoorNoGoodAndLightsAndAlarmGood()
    {
        $home = new HomeStatus(true, false, true);
        $alarm = new Alarm();
        $lights = new Lights();
        $door = new DoorLocked();
        $alarm->succeedWith($lights);
        $lights->succeedWith($door);

        $this->assertFalse($alarm->check($home));
    }
}