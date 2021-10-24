<?php

require_once './expendable.php'


class Drink extends Expendable
{
    private $drinkUp;
    private $quantity=250;

    public function __construct($size, $numberUses, $nameValue, $healthUp, $foodUp, $quantity)
    {
        parent::__construct($size, $numberUses, $nameValue);
        $this->drinkUp = $drinkUp;
        $this->quantity = $quantity;
    }

    public function __toString()
    {
        return parent::__toString() + "You drink {$this->quantity} powerUps. You still have {$this->numberUses}";
    }

    public function getDrinkUp()
    {
        return $this->drinkUp;
    }

    public function setDrinkUp($valueDrinkUp)
    {
        $this->drinkUp = $valueDrinkUp;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($valueToDecrease)
    {
        $this->quantity -= $valueToDecrease;
    }

    public function refillQuantityTotal()
    {
        $this->quantity = constant("MAXQUANTITY") ;
    }
}
