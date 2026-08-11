<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Dollar extends Money
{
    private static $currency;

    public function __construct($amount)
    {
        $this->amount = $amount;
        self::$currency = "USD";
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
