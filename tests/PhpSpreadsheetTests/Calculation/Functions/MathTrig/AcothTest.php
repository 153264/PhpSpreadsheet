<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\MathTrig;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig;
use PHPUnit\Framework\TestCase;

class AcothTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerACOTH
     *
     * @param mixed $expectedResult
     * @param mixed $number
     */
    public function testACOTH($expectedResult, $number)
    {
        $result = MathTrig::ACOTH($number);
        $this->assertEqualsWithDelta($expectedResult, $result, 1E-12);
    }

    public function providerACOTH()
    {
        return require 'data/Calculation/MathTrig/ACOTH.php';
    }
}
