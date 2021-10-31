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
                array_push($this->itemList[$x], array());
            }
        }
    }

    public function __toString()
    {
        return $this->itemList;
        // for ($x = 0; $x < $this->maxX; $x++) {
        //     for ($y = 0; $y < $this->maxY; $y++) {
        //         echo $this->itemList[$y];
        //     }
        // }
    }

    public function getItemList()
    {
        print_r($this->itemList);
    }

    public function remove($removeItem)
    {
        $flag = true;

        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if ($this->itemList[$i][$j] != null && $this->itemList[$i][$j][0]->getName() === $removeItem->getName() && $flag) {
                    for ($y = 0; $y < $removeItem->getSize(); $y++) {
                        unset($this->itemList[$i][$j][0]);
                        $j++;
                    }
                    $flag = false;
                }
            }
        }
    }

    public function add($newItem)
    {
        $flag = true;

        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if ($this->itemList[$i][$j] === array() && $flag) {
                    for ($y = 0; $y < $newItem->getSize(); $y++) {
                        array_push($this->itemList[$i][$j], $newItem);
                        $j++;
                    }
                    $flag = false;
                }
            }
        }
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
