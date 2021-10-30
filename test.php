<?php

class test
{
    private $itemList;

    public function __construct($maxX, $maxY)
    {
        $this->itemList = array(); //check maxX i maxY
        for ($x = 0; $x < $maxX; $x++) {
            array_push($this->itemList, array());
            for ($y = 0; $y < $maxY; $y++) {
                array_push($this->itemList[$x], 1);
            }
        }
    }

    public function __toString()
    {
        print_r($this->itemList);
    }
}
