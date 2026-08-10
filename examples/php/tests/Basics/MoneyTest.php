<?php
declare(strict_types=1);

namespace TddLab\Basics;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    #[Test]
    public function testCurrencyInequality()
    {
        $this->assertFalse(Money::dollar(5)->equals(new SwissFranc(5)));
        $this->assertFalse((new SwissFranc(5))->equals(Money::dollar(5)));
    }
}
