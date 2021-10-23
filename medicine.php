<?php

require_once './expendable.php'

class Medicine extends Expendable
{

    public function __construct($size, $numberUses, $nameValue, $healthUp, $foodUp, $quantity)
    {
        parent::__construct($size, $numberUses, $nameValue);
    }

    public function __toString()
    {
        return parent::__toString() + "You take a Medicine";
    }
}
