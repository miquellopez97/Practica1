<?php

require_once './salleGaming.php';

class Inventory implements salleGaming
{
    private $itemsList;

    public function __construct($maxX, $maxY)
    {
        $this->itemList = array(); //check maxX i maxY
        for ($x = 0; $x < $maxX; $x++) {
            array_push($this->itemList, array());
            for ($y = 0; $y < $maxY; $y++) {
                array_push($this->itemList[$x], 1);
            }
        }
        $this->name = "Mochila";
    }

    public function __toString()
    {
        print_r($this->itemList);
    }

    public function remove($removeItem)
    {
        $this->itemsList = array_diff($this->itemsList, array($removeItem));
    }

    public function add($newItem)
    {
        array_push($this->itemsList, $newItem);
    }

    public function reordenar()
    {
        sort($this->itemsList);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($playerName)
    {
        $this->name = $playerName;
    }
}
