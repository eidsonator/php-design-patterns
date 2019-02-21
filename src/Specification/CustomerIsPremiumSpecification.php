<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 7:44 PM
 */

namespace App\Specification;


final class CustomerIsPremiumSpecification implements CustomerSpecification
{

    private $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function isSatisfiedBy(Customer $customer): bool
    {
        return $this->orderRepository->countFor($customer) > 3;
    }
}