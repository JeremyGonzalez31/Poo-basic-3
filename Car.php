<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    private string $energy;

    private int $energyLevel;

    private bool $isStarted;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->isStarted = false;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): Car
    {
        $this->energyLevel = $energyLevel;
        return $this;
    }

    public function start(): string
    {
        $this->isStarted = true;
        return "vroom !";
    }

    public function switchOn(bool $isOn): bool
    {
        return $isOn = true;
    }

    public function switchOff(bool $isOff): bool
    {
        return $isOff = false;
    }

    public function changeWheel()
    {

    }
}