<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 12:21 PM
 */

namespace App\Strategy;

use App\Strategy\Generator\XlsGenerator;

class XlsReport extends Report
{
    public function __construct()
    {
        $this->generator =  new XlsGenerator();
    }
}