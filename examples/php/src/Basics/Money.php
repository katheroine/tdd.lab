<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Money
{
    protected $amount;

    public static function dollar($amount)
    {
        return new Dollar($amount);
    }

    public function equals(Money $money)
    {
        return (
            get_class($this) === get_class($money)
            && $this->amount == $money->amount
        );
    }
}
