<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/17/19
 * Time: 7:49 AM
 */

namespace App\Facade;


class BackgroundCheck
{
    private $ssn;

    public function __construct(string $ssn)
    {
        $this->ssn = $ssn;
    }

    public function process()
    {
        if ($this->ssn === '999-99-999') {
            return true;
        }
        return false;
    }
}