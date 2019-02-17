<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 12:21 PM
 */

namespace Tests\Strategy;

use App\Strategy\XlsReport;

class XlsReportTest extends \PHPUnit\Framework\TestCase
{
    public function testCanRun()
    {
        $report = new XlsReport();
        $this->assertEquals('Generates XLS Report', $report->generateReport());
    }
}