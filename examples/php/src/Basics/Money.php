<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Money
{
    protected $currency;
    protected $amount;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function multiply($multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

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
            $this->amount == $money->amount
            && $this->currency() == $money->currency()
        );
    }
}
