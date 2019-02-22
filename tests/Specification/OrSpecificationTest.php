<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/21/19
 * Time: 7:51 PM
 */

namespace Tests\Specification;


use App\Specification\CustomerHasOverDueInvoicesSpecification;
use App\Specification\CustomerIsPremiumSpecification;
use App\Specification\OrSpecification;
use PHPUnit\Framework\TestCase;

class OrSpecificationTest extends TestCase
{
    public function testInvoicePasses()
    {
        $invoiceRepository = new MockInvoiceRepository(true);
        $customer = $invoiceRepository->findById(42);

        $orderRepository = new MockOrderRepository(3);

        $spec = new OrSpecification(

            new CustomerIsPremiumSpecification($orderRepository),
            new CustomerHasOverDueInvoicesSpecification($invoiceRepository)
        );
        $this->assertTrue($spec->isSatisfiedBy($customer));
    }

    public function testPremiumPasses()
    {
        $invoiceRepository = new MockInvoiceRepository(false);
        $customer = $invoiceRepository->findById(42);

        $orderRepository = new MockOrderRepository(4);

        $spec = new OrSpecification(

            new CustomerIsPremiumSpecification($orderRepository),
            new CustomerHasOverDueInvoicesSpecification($invoiceRepository)
        );
        $this->assertTrue($spec->isSatisfiedBy($customer));
    }

    public function testBothFail()
    {
        $invoiceRepository = new MockInvoiceRepository(false);
        $customer = $invoiceRepository->findById(42);

        $orderRepository = new MockOrderRepository(3);

        $spec = new OrSpecification(

            new CustomerIsPremiumSpecification($orderRepository),
            new CustomerHasOverDueInvoicesSpecification($invoiceRepository)
        );
        $this->assertFalse($spec->isSatisfiedBy($customer));
    }

}