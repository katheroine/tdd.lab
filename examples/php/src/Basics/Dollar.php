<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Dollar
{
    public $amount;

    public function multiply()
    {
        $this->amount = 5 * 2;
    }
}
