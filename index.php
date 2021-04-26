<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bus.php';

$bike = new Bicycle('blue', 1);

$bike->setCurrentSpeed(0);
$bike->getCurrentSpeed();

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br><br>';


$car = new Car('blue', 5, 'Water');

echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la Twingo : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la Twingo  : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

var_dump($car);

$truck1 = new Truck("blue", 3, "fuel", 3);

echo $truck1->forward();
echo $truck1->brake();
echo $truck1->capacityState();

$tesla = new Car('black', 4, "electric");
$ferrari = new Car('red', 2, "fuel");
$schoolBus = new Bus('yellow', 40, "fuel");

echo $schoolBus->forward();

