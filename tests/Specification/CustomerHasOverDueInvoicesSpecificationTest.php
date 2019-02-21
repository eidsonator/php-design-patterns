<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 8:02 PM
 */

namespace Tests\Specification;

use App\Specification\CustomerHasOverDueInvoicesSpecification;
use PHPUnit\Framework\TestCase;

class CustomerHasOverDueInvoicesSpecificationTest extends TestCase
{
    public function testHasOverDue()
    {
        $repo = new MockInvoiceRepository(true);
        $customer = $repo->findById(42);

        $spec = new CustomerHasOverDueInvoicesSpecification($repo);
        $this->assertTrue($spec->isSatisfiedBy($customer));
    }

    public function testHasNoOverDue()
    {
        $repo = new MockInvoiceRepository(false);
        $customer = $repo->findById(42);

        $spec = new CustomerHasOverDueInvoicesSpecification($repo);
        $this->assertFalse($spec->isSatisfiedBy($customer));
    }
}