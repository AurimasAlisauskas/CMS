<?php
if (isset($_POST['submit'])) {

    $nameList = ["Aurimas", "Agne", "Egidija", "Aurelija"];
    $min = 5;
    $max = 16;

    $username = $_POST['username'];
    $password = $_POST['password'];

//    if (strlen($username) < $min || strlen($username) > $max) {
//        echo "Username must be between 5 and 16 characters";
//    }

    if (!in_array($username, $nameList)){
        echo "You shall not pass!";
    }else{
        echo "Welcome to Tomorrowland!";
    }

//    echo "Labas " . $username;
//    echo ", tavo slaptazodis - " . $password;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

  <form action="form.php" method="post">
      <input type="name" name="username" placeholder="Enter Username"><br>
      <input type="password" name="password" placeholder="Enter Password"><br>
      <input type="submit" name="submit">
  </form>
   <?php


    ?>
</body>
</html>
