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
        $five = new Dollar(5);
        $product = $five->multiply(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->multiply(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
