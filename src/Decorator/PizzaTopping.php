<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 6:09 PM
 */

namespace App\Decorator;


abstract class PizzaTopping implements PizzaInterface
{
    protected $pizza;

    function __construct(PizzaInterface $pizza)
    {
        $this->pizza = $pizza;
    }

    abstract function cost(): int;
    abstract function description(): string;
}