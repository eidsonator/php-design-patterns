<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 7:59 PM
 */

namespace App\Specification;

class CustomerHasOverDueInvoicesSpecification implements CustomerSpecification
{

    private $invoiceRepository;

    public function __construct(InventoryRepositoryInterface $invoiceRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
    }

    public function isSatisfiedBy(Customer $customer): bool
    {
        return $this->invoiceRepository->hasOverDueInvoices($customer);
    }
}