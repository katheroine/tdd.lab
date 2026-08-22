<?php
declare(strict_types=1);

namespace TddLab\Basics;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class SwissFrancTest extends TestCase
{
    #[Test]
    public function testMultiplication()
    {
        $five = Money::swissFranc(5);
        $this->assertTrue(Money::swissFranc(10)->equals($five->multiply(2)));
        $this->assertTrue(Money::swissFranc(15)->equals($five->multiply(3)));
        $this->assertFalse(Money::swissFranc(15)->equals($five->multiply(2)));
    }
}
