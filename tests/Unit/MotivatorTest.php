<?php

declare (strict_types = 1);

namespace Unit;

use PHPUnit\Framework\TestCase;
use Motivator\Motivator;

final class MotivatorTest extends TestCase
{
    public function testSaySomethingInString(): void
    {
        $this->assertInternalType('string', Motivator::say());
    }
}
