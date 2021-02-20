<?php

namespace dimitriu;

class LinearEquation
{
    public function LinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new DimitriuException("Equation doesn`t exist. \n\r");
        }

        MyLog::Instance()::log("It's linear equation. \n\r");
        return $this->x = [$b * (-1) / $a];
    }

    protected $x;
}