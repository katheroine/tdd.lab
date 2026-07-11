<?php
declare(strict_types=1);

namespace TddLab\Basics;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    #[Test]
    public function testMultiplication()
    {
        $three = new Money(3);
        $three->multiply(2);
        $this->assertEquals(6, $three->amount);
    }
}
