<?php

require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

$motorWay = new MotorWay();
$residentialWay = new ResidentialWay();
$pedestrianWay = new PedestrianWay();

$car = new Car('blue', 5, 'electric');
$truck = new Truck('red', 3, 'fuel', 20);
$bike = new Bicycle('white', 1);
$skateboard = new Skateboard('yellow', 0);

$motorWay->addVehicle($car);
$motorWay->addVehicle($truck);
$motorWay->addVehicle($bike);
$motorWay->addVehicle($skateboard);

$residentialWay->addVehicle($car);
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($bike);
$residentialWay->addVehicle($skateboard);

$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($truck);
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($skateboard);

echo 'MotorWay (' . $motorWay->getNbLane() . ' voies, ' . $motorWay->getMaxSpeed() . 'km/h)' . '<br>';
echo 'ResidentialWay (' . $residentialWay->getNbLane() . ' voies, ' . $residentialWay->getMaxSpeed() . 'km/h)' . '<br>';
echo 'PedestrianWay (' . $pedestrianWay->getNbLane() . ' voies, ' . $pedestrianWay->getMaxSpeed() . 'km/h)' . '<br>';

var_dump($motorWay->getCurrentVehicles());
var_dump($residentialWay->getCurrentVehicles());
var_dump($pedestrianWay->getCurrentVehicles());
