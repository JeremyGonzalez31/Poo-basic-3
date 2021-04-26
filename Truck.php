<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private float $storageCapacity;
    private float $load = 2;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, float $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->energy = $energy;
    }

    public function capacityState(): string
    {
        if($this->load<$this->storageCapacity){
            return "in filling";
        } else {
            return "full";
        }
    }

    public function setStorageCapacity(float $setStorageCapacity): void {
        $this->storageCapacity = $setStorageCapacity;
    }

    public function getStorageCapacity(): float {
        return $this->storageCapacity;
    }

    public function setLoad(float $setLoad): void {
        $this->load = $setLoad;
    }

    public function getLoad(): float {
        return $this->load;
    }

    public function setEnergy (string $setEnergy): void {
        $this->energy = $setEnergy;
    }

    public function getEnergy(): string {
        return $this->energy;
    }   

    public function changeWheel()
    {

    }
}