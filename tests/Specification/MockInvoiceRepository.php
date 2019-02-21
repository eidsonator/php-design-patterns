<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 8:01 PM
 */

namespace Tests\Specification;

use App\Specification\Customer;
use App\Specification\InventoryRepositoryInterface;

class MockInvoiceRepository implements InventoryRepositoryInterface
{
    /** @var bool */
    private $hasOverDue;

    public function __construct(bool $hasOverDue)
    {
        $this->hasOverDue = $hasOverDue;
    }

    public function findById(int $id): Customer
    {
        return new Customer();
    }

    public function hasOverDueInvoices(\App\Specification\Customer $customer): bool
    {
        return $this->hasOverDue;
    }
}