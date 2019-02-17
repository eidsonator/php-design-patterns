<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 6:07 PM
 */

namespace App\Decorator;


interface PizzaInterface
{
    function cost(): int;
    function description(): string;
}