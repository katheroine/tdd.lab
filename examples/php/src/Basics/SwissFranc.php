<?php
declare(strict_types=1);

namespace TddLab\Basics;

class SwissFranc extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
        self::$currency = "CHF";
    }

    public function multiply($multiplier)
    {
        return new self($this->amount * $multiplier);
    }
}
