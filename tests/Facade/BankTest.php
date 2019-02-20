<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/17/19
 * Time: 7:57 AM
 */

namespace Tests\Facade;

use App\Facade\Bank;
use PHPUnit\Framework\TestCase;

class BankTest extends TestCase
{
    public function testProcessTrue()
    {
        $bank = new Bank('999-99-999');
        $this->assertTrue($bank->approve());
    }

    public function testProcessFalse()
    {
        $bank = new Bank('999-99-998');
        $this->assertFalse($bank->approve());
    }
}