<?php
$x_w1 = $_GET['w1'];
$x_d1 = $_GET['d1'];
$x_w2 = $_GET['w2'];
$x_w3 = $_GET['w3'];
$xblitzdauer = "100";

$w1 = $x_w1 * 1000;
$d1 = $x_d1 * 1000;
$w2 = $x_w2 * 1000;
$w3 = $x_w3 * 1000;
$blitzdauer = $xblitzdauer * 1000;

$content = $x_w1 . ";" . $x_d1 . ";" . $x_w2 . ";" . $x_w3;
$insert =  "\n" . $content;

$file = fopen('my_settings.txt', 'w');
fwrite($file, $content);
fclose($file);

$settingsFile = 'settings.txt';
file_put_contents($settingsFile, $insert, FILE_APPEND | LOCK_EX);

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>