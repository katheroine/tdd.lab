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
        $this->amount = $this->amount * $multiplier;
    }
}
