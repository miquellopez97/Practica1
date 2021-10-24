<?php

require_once './item.php'

class Expendable extends Items
{
    protected $healthUp;

    public function __constructor($size, $numberUses, $nameValue, $healthUp)
    {
        parent::__construct($size, $numberUses, $nameValue);
        $this->healthUp = $healthUp;
    }

    public function __toString()
    {
        return parent::__toString() . `the life that adds to you is {$this->healthUp}`;
    }

    public function use($numberUses)
    {
        return $this->numberUses++;
    }

    public function getHealthUp()
    {
        return $this->healthUp;
    }

    public function setHealthUp($valueHealthUp)
    {
        $this->healthUp = $valueHealthUp;
    }
}
