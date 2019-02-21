<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/20/19
 * Time: 7:37 PM
 */

namespace App\Specification;


interface CustomerSpecification
{
    public function isSatisfiedBy(Customer $customer): bool;
}