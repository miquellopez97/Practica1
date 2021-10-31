<?php

require_once './expendable.php';

class Food extends Expendable
{
    private $healthUp;
    private $foodUp;
    private $type;

    public function __construct($size, $numberUses, $nameValue, $healthUp, $foodUp, $type){
        parent::__construct($size, $numberUses, $nameValue, $healthUp);
        $this->foodUp = $foodUp;
        $this->type = $type;
    }

    public function __toString()
    {
        return parent::__toString() . `The item is {$this->type}, the size is {$this->size} 
        and remaining number of uses are {$this->numberUses}`;
    }

    public function getFoodUp()
    {
        return $this->foodUp;
    }

    public function setFoodUp($valueFoodUp)
    {
        $this->foodUp = $valueFoodUp;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($valueType)
    {
        if ($valueType === "meat" || $valueType === "plant") {
            $this->type = $valueType;
        } else {
            echo "No es meat/plant";
        }
    }
}
