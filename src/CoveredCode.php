<?php

declare(strict_types=1);

namespace App;

use App\{
    Foo
};
use App\Bar;

class CoveredCode
{
    public static function coveredCode(): string
    {
        return '1';
    }
}
