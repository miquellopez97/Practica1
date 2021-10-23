<?php

interface InterficieGaming
{
    public function getName();
    public function setName($nameValue);
    public function __toString();
}

class Inventory implements InterficiGaming
{
    private $itemsList;
    private $maxX;
    private $maxY;

    public function __constructor()
    {
        $this->maxX = [];
        $this->maxY = [];
    }

    public function remove()
    {
    }

    public function add()
    {
    }

    public function reordenar()
    {
    }

}
