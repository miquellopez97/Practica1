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
        return "Jugador: {$this->playerName} \nHealth: {$this->healthLevel} \nDrink level: {$this->drinkLevel} \nFood level: {$this->foodLevel} \nRight Hand: {$this->rightObject} \nLeft Hand: {$this->leftObject}";
    }

    public function swapHands()
    {
        $aux = $this->leftObject;
        $this->leftObject = $this->rightObject;
        $this->rightObject = $aux;
    }

    public function drink($drink, $health)
    {
        $this->healthLevel += $health;
        if ($this->healthLevel > 100) {
            $this->healthLevel = 100;
        }
        $this->drinkLevel += $drink;
        if ($this->drinkLevel > 100) {
            $this->drinkLevel = 100;
        }
    }

    public function eat($food, $health)
    {
        $this->healthLevel += $health;
        if ($this->healthLevel > 100) {
            $this->healthLevel = 100;
        }
        $this->foodLevel += $food;
        if ($this->foodLevel > 100) {
            $this->foodLevel = 100;
        };
    }

    public function takeMedicine($heal)
    {
        $this->healthLevel += $heal;
        if ($this->healthLevel > 100) {
            $this->healthLevel = 100;
        }
    }

    public function injury($harm)
    {
        $this->healthLevel -= $harm;
    }

    public function healthCheck()
    {
        switch (true) {
            case ($this->healthLevel >= 75):
                echo " Very good health!";
                break;
            case ($this->healthLevel >= 50 && $this->healthLevel <= 74):
                echo "Health is good!";
                break;
            case ($this->healthLevel >= 25 && $this->healthLevel <= 49):
                echo "Regular health!";
                break;
            case ($this->healthLevel >= 1 && $this->healthLevel <= 24):
                echo "Critical condition!";
                break;
            case $this->healthLevel === 0:
                echo "R.I.P!";
                break;
            default:
                echo "Something is wrong";
                break;
        }
    }

    public function moveToHand($hand, $itemName)
    {
        if ($hand === 'left') {
            $this->leftObject = $itemName;
        } else {
            $this->rightObject = $itemName;
        }
    }

    public function moveToInventory($hand)
    {
        if ($hand === 'left') {
            $this->inventory->add($this->leftObject);
        } else {
            $this->inventory->add($this->rightObject);
        }
    }

    public function searchInventory($itemName)
    {
        $flagFind = false;

        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if ($this->inventory[$i][$j] != null && $this->inventory[$i][$j][0]->getName() === $itemName->getName() && !$flag) {
                    $flagFind = true;
                }
            }
        }

        if ($flagFind) {
            echo 'trobat';
        }
    }
}
