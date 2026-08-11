<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Dollar extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public static function currency()
    {
        return "USD";
    }

    public function multiply($multiplier)
    {
        return new self($this->amount * $multiplier);
    }
}
