<?php
class Car {

    var $wheels = 4;
    var $hood = 1;
    var $doors = 4;
    var $engine = 1;

    function MoveWheel () {
        echo $this->wheels = 12;
    }
}

$Lexus = new Car();

class Plane extends Car {

}

$Jet = new Plane();
echo $Jet->MoveWheel() . "<br>";

echo $Jet->engine;


//if (class_exists ("Plane")) {
//    echo "class exists";
//}
?>
