<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/21/19
 * Time: 7:06 PM
 */

namespace App\Behavioral\ChainOfResponsibility;


abstract class HomeChecker
{
    /** @var HomeChecker null */
    protected $successor = null;

    public abstract function check(HomeStatus $home): bool;

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home): bool
    {
        if ($this->successor) {
            return $this->successor->check($home);
        }
        return true;
    }
}