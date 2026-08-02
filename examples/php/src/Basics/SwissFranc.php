<?php
declare(strict_types=1);

namespace TddLab\Basics;

class SwissFranc
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function multiply()
    {
        return new self();
    }

    public function equals($swissFranc)
    {
        return $this->amount == $swissFranc->amount;
    }
}
