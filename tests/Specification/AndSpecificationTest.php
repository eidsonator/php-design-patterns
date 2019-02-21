<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 8:09 PM
 */

namespace Tests\Specification;

use App\Specification\AndSpecification;
use App\Specification\CustomerHasOverDueInvoicesSpecification;
use App\Specification\CustomerIsPremiumSpecification;
use PHPUnit\Framework\TestCase;

class AndSpecificationTest extends TestCase
{
    public function testBothPass()
    {
        $invoiceRepository = new MockInvoiceRepository(true);
        $customer = $invoiceRepository->findById(42);

        $orderRepository = new MockOrderRepository(4);

        $spec = new AndSpecification(
            new CustomerHasOverDueInvoicesSpecification($invoiceRepository),
            new CustomerIsPremiumSpecification($orderRepository)
        );

        $this->assertTrue($spec->isSatisfiedBy($customer));
    }

    public function testInvoiceFails()
    {
        $invoiceRepository = new MockInvoiceRepository(false);
        $customer = $invoiceRepository->findById(42);

        $orderRepository = new MockOrderRepository(4);

        $spec = new AndSpecification(
            new CustomerHasOverDueInvoicesSpecification($invoiceRepository),
            new CustomerIsPremiumSpecification($orderRepository)
        );
        $this->assertFalse($spec->isSatisfiedBy($customer));
    }

    public function testPremiumFails()
    {
        $invoiceRepository = new MockInvoiceRepository(true);
        $customer = $invoiceRepository->findById(42);

        $orderRepository = new MockOrderRepository(3);

        $spec = new AndSpecification(
            new CustomerHasOverDueInvoicesSpecification($invoiceRepository),
            new CustomerIsPremiumSpecification($orderRepository)
        );

        $this->assertFalse($spec->isSatisfiedBy($customer));
    }


}