<?php

interface LightableInterface
{
    public function switchOn(bool $isOn): bool;
    public function switchOff(bool $isOff): bool;
}