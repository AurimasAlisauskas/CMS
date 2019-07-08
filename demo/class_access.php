<?php
class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $doors = 4;
    var $engine = 1;

    function showProperty () {
        echo $this->hood . " ";
        echo $this->doors;
    }
}

$Lexus = new Car();
echo $Lexus->showProperty() . "<br>";

class Truck extends Car {

}

$semi = new Truck();

echo $semi->showProperty();
?>
