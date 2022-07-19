<?php 

class Vehicle {

    public $color;
    public $speed;
    public $brand;

    public function tripTime($distance) {
        $time = $distance / $this->speed;
        return $time;
    }
}

class Bicycle extends Vehicle {
    public $type;
}

class Car extends Vehicle {
    public $fuel;

    public function fuelConsumption($distance) {
        $result = ($this->fuel * $distance)  / 100;
        return $result; 
    }
}

$car1 = new Car;
$car1->speed = 119;
$car1->fuel = 12;

$car2 = new Car;
$car2->speed = 109;
$car2->fuel = 13;

$b = new Bicycle; 
$b->speed = 20;

echo '<br> Car1 time: '. $car1->tripTime(1000);
echo '<br> Car2 time: '. $car2->tripTime(1000);
echo '<br> Bycicle time: '. $b->tripTime(1000);