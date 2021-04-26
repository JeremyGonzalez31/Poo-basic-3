<?php

final class ResidentialWay extends HighWay
{
    public function __construct() 
    {
        parent:: __construct(2, 50);
    }

    public function addVehicle(Vehicle $vehicle) 
    { 
        array_push ($this->currentVehicles, $vehicle);
    }
}