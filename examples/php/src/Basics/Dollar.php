<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Dollar
{
    public $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function multiply($multiplier)
    {
        return new self($this->amount * $multiplier);
    }

    public function equals()
    {
        return true;
    }
}
