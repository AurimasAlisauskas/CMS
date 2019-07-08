<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php

    function init(){
        calculate();
        say_Something();
    }

    function say_Something(){
        echo "Labas Rytas";
    }

    function calculate(){
        echo 56 + 77 . "<br>";
    }

    init();

    ?>
</body>
</html>
