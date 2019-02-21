<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 7:49 PM
 */

namespace Tests\Specification;


use App\Specification\Customer;
use App\Specification\CustomerIsPremiumSpecification;
use PHPUnit\Framework\TestCase;

class CustomerIsPremiumSpecificationTest extends TestCase
{
    public function testCustomerIsPremium()
    {
        $repo = new MockOrderRepository(4);
        $customer = new Customer();

        $spec = new CustomerIsPremiumSpecification($repo);
        $result = $spec->isSatisfiedBy($customer);

        $this->assertTrue($result);
    }

    public function testCustomerIsNotPremium()
    {
        $repo = new MockOrderRepository(3);
        $customer = new Customer();

        $spec = new CustomerIsPremiumSpecification($repo);
        $result = $spec->isSatisfiedBy($customer);

        $this->assertFalse($result);
    }
}