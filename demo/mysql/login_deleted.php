<?php include "db.php";?>
<?php include "functions.php";?>
<?php deleteRows();?>
<?php include "includes/header.php"?>
   <div class="conteiner">
       <div class="col-sm-6">
       <h1 class="text-center">Delete</h1>
        <form action="login_deleted.php" method="post">
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
<?php include "includes/footer.php"?>
