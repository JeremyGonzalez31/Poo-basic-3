<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(bool $isOn): bool
    {
        if($this->currentSpeed>10){
        return $isOn = true;
    }
}

    public function switchOff(bool $isOff): bool
    {
        return $isOff = false;
    }

    public function changeWheel()
    {

    }
}

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();


