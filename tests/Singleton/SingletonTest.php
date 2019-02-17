<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 3:15 PM
 */

namespace Tests\Singleton;

use App\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $one = Singleton::getInstance();
        sleep(1);
        $two = Singleton::getInstance();
        $this->assertEquals($one->getMicro(), $two->getMicro());
    }
}