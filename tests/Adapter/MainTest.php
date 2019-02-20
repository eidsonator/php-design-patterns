<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/19/19
 * Time: 7:25 PM
 */

namespace Tests\Adapter;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testMain()
    {
        $this->expectOutputString('Sent 200');

        require_once 'src/Adapter/Main.php';
    }
}