<?php
declare(strict_types=1);

namespace TddLab\Basics;

abstract class Money
{
    protected $currency;
    protected $amount;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    abstract public function multiply($multiplier);

    public function currency()
    {
        return $this->currency;
    }

    public static function dollar($amount)
    {
        return new Dollar($amount, "USD");
    }

    public static function swissFranc($amount)
    {
        return new SwissFranc($amount, "CHF");
    }

    public function equals(Money $money)
    {
        return (
            get_class($this) === get_class($money)
            && $this->amount == $money->amount
        );
    }
}
