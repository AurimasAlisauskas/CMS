<?php include "db.php";?>
<?php include "functions.php";?>
<?php
if (isset ($_POST['submit'])) {
    deleteRows();
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
       <div class="col-sm-6">
       <h1 class="text-center">Update</h1>
        <form action="login_delete.php" method="post">
               <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
               </div>
               <div class="form-group">
                   <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
               </div>
               <div class="form-group">
                   <select name="id" id="">
                      <?php
                        showAllData();
                       ?>
                   </select>
               </div>
               <input class="btn btn-primary" type="submit" name="submit" value="Delete">
           </form>
       </div>
   </div>

</body>
</html>
