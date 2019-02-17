<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 2:58 PM
 */

namespace App\Strategy;

use App\Strategy\Generator\GeneratorInterface;

class Report
{
    /** @var GeneratorInterface */
    protected $generator;

    public function generateReport()
    {
        return $this->generator->generateReport();
    }
}