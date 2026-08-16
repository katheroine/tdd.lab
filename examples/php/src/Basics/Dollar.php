<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Dollar extends Money
{
    public function multiply($multiplier)
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
