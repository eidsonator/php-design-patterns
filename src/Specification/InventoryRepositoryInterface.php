<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 7:57 PM
 */

namespace App\Specification;

interface InventoryRepositoryInterface
{

    public function findById(int $id): Customer;

    public function hasOverDueInvoices(Customer $customer): bool;
}