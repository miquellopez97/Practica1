<?php

require_once './item.php';

class Tool extends Item
{
    private $maxUses = 256;
    private $harmValue;
    private $isBroken;

    public function __construct($size, $numberUses, $nameValue, $harmValue, $isBroken)
    {
        parent::__construct($size, $numberUses, $nameValue);
        $this->harmValue = $harmValue;
        $this->isBroken = $isBroken;
    }

    public function __toString()
    {
        return parent::__toString() . $this->harmValue . "and is {$this->isBroken}";
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

        if ($randomNumber < 75) {
            return $this->harmValue;
        } else {
            return 0;
        }
    }
}
