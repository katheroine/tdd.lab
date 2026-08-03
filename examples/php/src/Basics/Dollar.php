<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Dollar extends Money
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function multiply($multiplier)
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(Dollar $dollar)
    {
        return $this->amount == $dollar->amount;
    }
}
