<?php

require_once './salleGaming.php';

class Player implements salleGaming
{
    private $healthLevel;
    private $foodLevel;
    private $drinkLevel;
    private $inventory;
    private $rightObject;
    private $leftObject;
    private $playerName;

    public function __construct($healthLevel, $foodLevel, $drinkLevel, $inventory, $rightObject, $leftObject, $playerName)
    {
        $this->healthLevel = $healthLevel;
        $this->foodLevel = $foodLevel;
        $this->drinkLevel = $drinkLevel;
        $this->inventory = $inventory;
        $this->rightObject = $rightObject;
        $this->leftObject = $leftObject;
        $this->playerName = $playerName;
    }

    public function getName()
    {
        return $this->playerName;
    }

    public function setName($playerNameNewValue)
    {
        $this->playerName = $playerNameNewValue;
    }


    public function getHealth()
    {
        return $this->healthLevel;
    }

    public function __toString()
    {
        return "Jugador: {$this->playerName} \nHealth: {$this->healthLevel} \nDrink level: {$this->drinkLevel} \nFood level: {$this->drinkLevel} \nRight Hand: {$this->rightObject} \nLeft Hand: {$this->leftObject}";
    }

    public function swapHands()
    {
        $aux = $this->leftObject;
        $this->leftObject = $this->rightObject;
        $this->rightObject = $aux;
    }

    public function drink($drinkItem)
    {
        $this->healthLevel += $drinkItem->$healthUp;
        $this->drinkLevel += $drinkItem->$drinkUp;
    }

    public function eat($foodItem)
    {
        $this->healthLevel += $foodItem->$healthUp;
        $this->foodLevel += $foodItem->$foodUp;
    }

    public function takeMedicine($medicineItem)
    {
        $this->healthLevel += $medicineItem->$healthUp;
    }

    public function injury($harm)
    {
        $this->healthLevel -= $harm;
    }

    public function searchInventory($itemName)
    {
        if ($this->inventory[$itemName]) {
            echo $this->inventory[$itemName];
        } else {
            echo 'No existe el item';
        }
    }

    public function healthCheck()
    {
        switch (true) {
            case ($this->healthLevel >= 75):
                echo "VERY GOOD HEALTH!";
                break;
            case ($this->healthLevel >= 50 && $this->healthLevel <= 74):
                echo "Health is good!";
                break;
            case ($this->healthLevel >= 25 && $this->healthLevel <= 49):
                echo "Regular health!";
                break;
            case ($this->healthLevel >= 1 && $this->healthLevel <= 24):
                echo "LOW HEALTH!";
                break;
            case $this->healthLevel === 0:
                echo "RIP";
                break;
        }
    }

    public function moveToHand($hand, $itemName)
    {
        if ($hand === 'left') {
            $this->leftObject = $this->inventory[$itemName];
        } else {
            $this->rightObject = $this->inventory[$itemName];
        }
    }

    public function moveToInventory($hand)
    {
        if ($hand === 'left') {
            array_push($this->inventory, $this->leftObject);
        } else {
            array_push($this->inventory, $this->rightObject);
        }
    }
}
