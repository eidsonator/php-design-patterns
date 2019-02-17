<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 3:04 PM
 */

namespace Tests\Strategy;


use App\Strategy\HtmlReport;

class HtmlReportTest extends \PHPUnit\Framework\TestCase
{
    public function testCanRun()
    {
        $report = new HtmlReport();
        $this->assertEquals('Generates HTML Report', $report->generateReport());
    }
}