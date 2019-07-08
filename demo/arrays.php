<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $numberList = array(5, 67, '567', 56, '<h1>Labas</h1>');

    //print_r ($numberList);
    echo $numberList[4] . "<br>";

    $names = ["first_Name" => 'Aurimas', "last_Name" => 'Alisauskas'];

    echo $names ['first_Name'] . " " . $names['last_Name'];

    ?>
</body>
</html>
