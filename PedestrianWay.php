<?php

final class PedestrianWay extends Highway
{
    public function __construct() 
    {
        parent:: __construct(1, 10);
    }

    public function addVehicle(Vehicle $vehicle) 
    {
        if($vehicle instanceof Skateboard|| $vehicle instanceof Bicycle) 
        array_push ($this->currentVehicles, $vehicle);
    }
}