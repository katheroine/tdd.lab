<?php
declare(strict_types=1);

namespace TddLab\Basics;

class SwissFranc extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function multiply($multiplier)
    {
        return new self($this->amount * $multiplier);
    }

    public function equals($swissFranc)
    {
        return $this->amount == $swissFranc->amount;
    }
}
