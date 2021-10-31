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

    public function __toString()
    {
        return "Health: {$this->healthLevel} \nDrink level: {$this->drinkLevel} \nFood level: {$this->drinkLevel}";
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

    public function injury($toolItem)
    {
        $this->healthLevel -= $toolItem->harmValue;
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
        switch ($this->healthLevel) {
            case range(75, 100):
                echo "vERY GOOD HEALTH!";
                break;
            case range(50, 74):
                echo "Health is good!";
                break;
            case range(25, 49):
                echo "Regular health!";
                break;
            case range(1, 24):
                echo "LOW HEALTH!";
                break;
            case 0:
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
