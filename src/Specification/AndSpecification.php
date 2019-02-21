<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 8:06 PM
 */

namespace App\Specification;

class AndSpecification implements CustomerSpecification
{

    private $specs = [];

    public function __construct(CustomerSpecification ...$customerSpecifications)
    {
        $this->specs = $customerSpecifications;
    }

    public function isSatisfiedBy(Customer $customer): bool
    {
        foreach ($this->specs as $spec) {
            if (!$spec->isSatisfiedBy($customer)) {
                return false;
            }
        }
        return true;
    }
}