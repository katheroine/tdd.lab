<?php
declare(strict_types=1);

namespace TddLab\Basics;

class SwissFranc extends Money
{
    private static $currency = "CHF";

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
