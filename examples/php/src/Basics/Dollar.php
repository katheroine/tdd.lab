<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Dollar extends Money
{
    private static $currency = "USD";

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public static function currency()
    {
        return self::$currency;
    }

    public function multiply($multiplier)
    {
        return new self($this->amount * $multiplier);
    }
}
