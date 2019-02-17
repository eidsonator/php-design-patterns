<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 3:05 PM
 */

namespace App\Strategy\Generator;

class HtmlGenerator implements GeneratorInterface
{

    public function generateReport()
    {
        return 'Generates HTML Report';
    }
}