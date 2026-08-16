<?php
declare(strict_types=1);

namespace TddLab\Basics;

class SwissFranc extends Money
{
    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function multiply($multiplier)
    {
        return Money::swissFranc($this->amount * $multiplier);
    }
}
