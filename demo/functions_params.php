<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    function init($message){

        echo $message;

    }

    init("Valar Marguris");
    ?>

    <?php

    function calculate($number1, $number2){

        $sum = $number1 + $number2;
        echo $sum;
    }
    calculate(255,745);
    ?>
</body>
</html>
