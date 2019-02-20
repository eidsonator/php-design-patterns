<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/17/19
 * Time: 7:30 PM
 */

namespace Tests\Facade;

use App\Facade\Credit;
use PHPUnit\Framework\TestCase;

class CreditTest extends TestCase
{
    public function testProcessTrue()
    {
        $credit = new Credit('999-99-999');
        $this->assertTrue($credit->approve());
    }

    public function testProcessFalse()
    {
        $credit = new Credit('999-99-998');
        $this->assertFalse($credit->approve());
    }
}