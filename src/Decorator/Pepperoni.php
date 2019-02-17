<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 6:11 PM
 */

namespace App\Decorator;


class Pepperoni extends PizzaTopping
{

    function cost(): int
    {
        return $this->pizza->cost() + 2;
    }

    function description(): string
    {
        return $this->pizza->description() . " pepperoni";
    }
}