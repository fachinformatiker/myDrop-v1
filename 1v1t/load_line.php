<?php 
$row_number = $_POST['werte'];
$arrayFile = "settings.txt";
$storageFile = "my_settings.txt";
$lines = file($arrayFile);
$file = fopen($storageFile, 'w');
$line = $lines[$row_number];

$insert = preg_replace("/[\n\r]/","",$line);

fwrite($file, $insert);
fclose($file);

header('Location: ../1v1t.html');
?>
