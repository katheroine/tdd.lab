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
        $this->assertEquals(new SwissFranc(10), $five->multiply(2));
        $this->assertEquals(new SwissFranc(15), $five->multiply(3));
    }
}
