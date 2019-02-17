<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/17/19
 * Time: 7:52 AM
 */

namespace Tests\Facade;

use App\Facade\BackgroundCheck;
use PHPUnit\Framework\TestCase;

class BackgroundCheckTest extends TestCase
{

    public function testProcessTrue()
    {
        $backgroundCheck = new BackgroundCheck('999-99-999');
        $this->assertTrue($backgroundCheck->process());
    }

    public function testProcessFalse()
    {
        $backgroundCheck = new BackgroundCheck('999-99-998');
        $this->assertFalse($backgroundCheck->process());
    }
}
