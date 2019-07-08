<?php
if (isset ($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysql_connect ('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "We are in";
    } else {
        die ("Connection failed");
    }


//    if ($username && $password) {
//        echo $username . " " . $password;
//    } else {
//        echo "username or password not entered";
//    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="conteiner">
       <div class="col-sm-3">
           <form action="login.php" method="post">
               <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
               </div>
               <div class="form-group">
                   <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
               </div>
               <input class="btn btn-primary" type="submit" name="submit" value="Submit">
           </form>
       </div>
   </div>

</body>
</html>
