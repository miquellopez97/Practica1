<?php

require_once './item.php'

class expendable extends items
{
    protected $healthUp;

    public function __constructor($size, $numberUses, $nameValue, $healthUp)
    {
        parent::__construct($size, $numberUses, $nameValue);
        $this->healthUp = $healthUp;
    }

    public function __toString()
    {
        return parent::__toString();
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
