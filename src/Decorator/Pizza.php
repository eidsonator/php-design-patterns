<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 6:06 PM
 */

namespace App\Decorator;

class Pizza implements PizzaInterface
{

    function cost(): int
    {
        return 10;
    }

    function description():string
    {
        Return 'Pizza';
    }
}