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
        $five = new SwissFranc(5);
        $this->assertTrue((new SwissFranc(10))->equals($five->multiply(2)));
        $this->assertTrue((new SwissFranc(15))->equals($five->multiply(3)));
        $this->assertFalse((new SwissFranc(15))->equals($five->multiply(2)));
    }

    #[Test]
    public function testEquality()
    {
        $this->assertTrue((new SwissFranc(5))->equals(new SwissFranc(5)));
        $this->assertFalse((new SwissFranc(5))->equals(new SwissFranc(6)));
    }
}
