<?php

final class MotorWay extends HighWay
{
    public function __construct() 
    {
        parent:: __construct(4, 130);
    }

    public function addVehicle(Vehicle $vehicle) 
    {
        if($vehicle instanceof Car) 
        array_push ($this->currentVehicles, $vehicle);
    }
}