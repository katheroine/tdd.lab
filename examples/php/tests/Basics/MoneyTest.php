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
        $this->assertFalse(Money::dollar(5)->equals(Money::swissFranc(5)));
        $this->assertFalse(Money::swissFranc(5)->equals(Money::dollar(5)));
    }

    #[Test]
    public function testCurrency() {
        $dollar = Money::dollar(1);
        $this->assertEquals("USD", $dollar->currency());

        $franc = Money::swissFranc(1);
        $this->assertEquals("CHF", $franc->currency());

        $this->assertEquals("USD", $dollar->currency());
    }

    #[Test]
    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertTrue(Money::dollar(10)->equals($five->multiply(2)));
        $this->assertTrue(Money::dollar(15)->equals($five->multiply(3)));
        $this->assertFalse(Money::dollar(15)->equals($five->multiply(2)));
    }

    #[Test]
    public function testEquality()
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertFalse(Money::swissFranc(5)->equals(Money::dollar(5)));
    }
}
