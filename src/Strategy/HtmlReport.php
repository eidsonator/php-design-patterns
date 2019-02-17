<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 3:05 PM
 */

namespace App\Strategy;

use App\Strategy\Generator\HtmlGenerator;

class HtmlReport extends Report
{
    public function __construct()
    {
        $this->generator = new HtmlGenerator();
    }

}