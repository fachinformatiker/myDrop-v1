<?php 
$row_number = $_POST['werte'];
$arrayFile = "settings.txt";
$storageFile = "my_settings.txt";
$lines = file($arrayFile);
$file = fopen($storageFile, 'w');
fwrite($file, $lines[$row_number]);
fclose($file);

header('Location: ../1v2t.html');
?>
