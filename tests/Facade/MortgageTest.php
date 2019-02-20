<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/18/19
 * Time: 3:40 PM
 */

namespace Tests\Facade;

use App\Facade\Mortgage;
use PHPUnit\Framework\TestCase;

class MortgageTest extends TestCase
{
    public function testProcessTrue()
    {

        $this->assertTrue(Mortgage::apply('999-99-999'));
    }

    public function testProcessFalse()
    {
        $this->assertFalse(Mortgage::apply('999-99-998'));
    }
}