<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Money
{
    public $amount = 2 * 3;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function multiply($value)
    {
        $this->amount *= $value;
    }
}
