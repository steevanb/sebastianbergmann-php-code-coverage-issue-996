<?php

declare(strict_types=1);

namespace tests;

use App\CoveredCode;
use PHPUnit\Framework\TestCase;

final class CoveredCodeTest extends TestCase
{
    /** @covers \App\CoveredCode::coveredCode */
    public function testCoverage(): void
    {
        static::assertSame('1', CoveredCode::coveredCode());
    }
}
