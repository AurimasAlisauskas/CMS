<?php
$file = "example.txt";

if ($handle = fopen ($file, 'w')) {

    fwrite ($handle, 'Valar Marguris');

    fclose($handle);

} else {

    echo "Files could not be written";
}
?>
