<?php

require_once './salleGaming.php';


abstract class Item implements salleGaming
{
    protected $nameValue;
    protected $size;
    protected $numberUses;

    public function __construct($size, $numberUses, $nameValue)
    {
        $this->nameValue = $nameValue;
        $this->size = $size;
        $this->numberUses = $numberUses;
    }

    public function getName()
    {
        return $this->nameValue;
    }

    public function setName($newNameValue)
    {
        $this->nameValue = $newNameValue;
    }

    public function __toString()
    {
        return "The item is {$this->nameValue}, the size is {$this->size} 
        and remaining number of uses are {$this->numberUses}";
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($newSize)
    {
        $this->size = $newSize;
    }

    public function getNumberUses()
    {
        return $this->numberUses;
    }

    public function setNumberUses($newNumUses)
    {
        $this->numberUses = $newNumUses;
    }

    abstract public function use($numberUses);
}
