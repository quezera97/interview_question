<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class EpochConverterTest extends TestCase
{
    public function test_date_to_epoch(): void
    {
        $date = '2023-07-01';
        $expectedEpoch = strtotime($date);

        $this->assertEquals(1688169600, $expectedEpoch);
    }
}
