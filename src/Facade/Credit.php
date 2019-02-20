<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/17/19
 * Time: 7:29 PM
 */

namespace App\Facade;


class Credit
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