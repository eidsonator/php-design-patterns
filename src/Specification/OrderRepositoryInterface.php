<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 7:42 PM
 */

namespace App\Specification;


interface OrderRepositoryInterface
{
    public function findById(int $id): Customer;

    public function countFor(Customer $customer): int;
}