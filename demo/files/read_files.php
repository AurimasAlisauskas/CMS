<?php
$file = "example_copy.txt";

if ($handle = fopen ($file, 'r')) {

    echo $content = fread ($handle, filesize($file));

    fclose($handle);

} else {

    echo "Files could not be written";
}
?>
