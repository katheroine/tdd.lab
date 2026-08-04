<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Money
{
    protected $amount;

    public function equals(Money $money)
    {
        return $this->amount == $money->amount;
    }
}
