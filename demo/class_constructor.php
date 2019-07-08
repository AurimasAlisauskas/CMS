<?php
class Car {

    var $wheels = 4;
    var $hood = 1;
    var $doors = 4;
    var $engine = 1;

    function __construct () {
        echo $this->wheels = 12;
    }
}

$Lexus = new Car();
?>
