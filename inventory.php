<?php

require_once '/.salleGaming.php'
class Inventory implements InterficiGaming
{
    private $itemsList = [][];

    public function __constructor($maxX, $maxY)
    {
        $this->itemsList = [$maxX][$maxY];
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

}
