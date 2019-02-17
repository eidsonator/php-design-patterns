<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 3:00 PM
 */

namespace App\Strategy\Generator;

class XlsGenerator implements GeneratorInterface
{

    public function generateReport()
    {
        return 'Generates XLS Report';
    }
}