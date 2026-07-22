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
        $five->multiply(2);
        $this->assertEquals(10, $five->amount);
    }
}
