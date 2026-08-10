<?php
declare(strict_types=1);

namespace TddLab\Basics;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class DollarTest extends TestCase
{
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
    }
}
