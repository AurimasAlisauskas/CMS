   <?php
    global $connection;
    $connection = mysqli_connect ('localhost', 'root', '', 'loginapp');

    if (!$connection) {
        die ("Connection failed");
    }
?>
