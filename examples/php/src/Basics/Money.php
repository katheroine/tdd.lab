<?php
declare(strict_types=1);

namespace TddLab\Basics;

abstract class Money
{
    protected static $currency;
    protected $amount;

    abstract public static function currency();

    abstract public function multiply($multiplier);

    public static function dollar($amount)
    {
        return new Dollar($amount);
    }

    public static function swissFranc($amount)
    {
        return new SwissFranc($amount);
    }

    public function equals(Money $money)
    {
        return (
            get_class($this) === get_class($money)
            && $this->amount == $money->amount
        );
    }
}
