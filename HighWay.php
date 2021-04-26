<?php

abstract class HighWay 
{
    protected array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed) 
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array 
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $vehicles): void
    {
        $this->currentVehicles = $vehicles;
    }

    public function getNbLane(): int 
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int 
    {
        return $this->MaxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicleToAdd);
}