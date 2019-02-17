<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 6:13 PM
 */

namespace App\Decorator;


class Mushroom extends PizzaTopping
{

    function cost(): int
    {
        return $this->pizza->cost() + 1;
    }

    function description(): string
    {
        return $this->pizza->description() . " mushroom";
    }
}