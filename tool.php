<?php

require_once './item.php';

class Tool extends Item
{
    private $maxUses = 256;
    private $harmValue;
    private $isBroken;

    public function __constructor($size, $numberUses, $nameValue, $harmValue, $isBroken)
    {
        parent::__construct($size, $numberUses, $nameValue);
        $this->harmValue = $harmValue;
        $this->isBroken = $isBroken;
    }

    public function __toString()
    {
        return parent::__toString();
    }

    public function use($numberUses)
    {
        if ($this->numberUses === constant("MAXUSES")) {
            $this->isBroken = true;
        } else {
            return $this->numberUses++;
        }
    }

    public function reparar()
    {
        $this->numberUses / constant("MAXUSES");
        constant("MAXUSES") / 2;
    }

    public function attack()
    {
        $randomNumber = rand(1, 100);
        $hit = false;

        if ($randomNumber > 1 || $randomNumber <= 75) {
            $hit = true;
            return $hit;
            //Todo Metodo Injury de la clase player
        } else {
            return $hit;
        }
    }
}
