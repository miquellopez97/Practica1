<?php

require_once './expendable.php'

class drink extends expendable
{
    private $drinkUp;
    private $quantity;
    //const max 250

    public function __construct($size, $numberUses, $nameValue, $healthUp, $foodUp, $quantity){
        parent::__construct($size, $numberUses, $nameValue);
        $this->drinkUp = $drinkUp;
        $this->quantity = $quantity;
    }
}
