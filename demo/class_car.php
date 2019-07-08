<?php
class Car {

    var $wheels = 4;
    var $hood = 1;
    var $doors = 4;
    var $engine = 1;

    function MoveWheel () {
        $this->wheels = 12;
    }
}

$Lexus = new Car();
$DAF = new Car();
$Lexus->wheels = 8;
$Lexus->MoveWheel();
echo $Lexus->wheels . "<br>";
echo $DAF->wheels = 16;
?>
