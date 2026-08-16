<?php
declare(strict_types=1);

namespace TddLab\Basics;

class SwissFranc extends Money
{
    public function __construct($amount, $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function multiply($multiplier)
    {
        return Money::swissFranc($this->amount * $multiplier);
    }
}
