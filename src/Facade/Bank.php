<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/17/19
 * Time: 7:57 AM
 */

namespace App\Facade;


class Bank
{
    private $ssn;

    public function __construct(string $ssn)
    {
        $this->ssn = $ssn;
    }

    public function approve()
    {
        if ($this->ssn === '999-99-999') {
            return true;
        }
        return false;
    }
}