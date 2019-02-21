<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 7:47 PM
 */

namespace Tests\Specification;

use App\Specification\Customer;
use App\Specification\OrderRepositoryInterface;

class MockOrderRepository implements OrderRepositoryInterface
{

    private $count;

    public function __construct(int $count)
    {
        $this->count = $count;
    }

    public function findById(int $id): Customer
    {
        return new Customer();
    }

    public function countFor(Customer $customer): int
    {
        return $this->count;
    }
}