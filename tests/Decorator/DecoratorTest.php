<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 6:04 PM
 */

namespace Tests\Decorator;


use App\Decorator\Mushroom;
use App\Decorator\Pepperoni;
use App\Decorator\Pizza;

class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    public function testPizza()
    {
        $pizza = new Pizza();
        $this->assertEquals(10, $pizza->cost());
        $this->assertEquals('Pizza', $pizza->description());
    }

    public function testPepperoniPizza()
    {
        $pizza = new Pepperoni(new Pizza());
        $this->assertEquals(12, $pizza->cost());
        $this->assertEquals('Pizza pepperoni', $pizza->description());
    }

    public function testMushroomPizza()
    {
        $pizza = new Mushroom(new Pizza());
        $this->assertEquals(11, $pizza->cost());
        $this->assertEquals('Pizza mushroom', $pizza->description());
    }

    public function testPepperoniMushroomPizza()
    {
        $pizza = new Mushroom(new Pepperoni(new Pizza()));
        $this->assertEquals(13, $pizza->cost());
        $this->assertEquals('Pizza pepperoni mushroom', $pizza->description());
    }

}