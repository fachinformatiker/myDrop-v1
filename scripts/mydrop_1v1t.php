<?php

include ("conf.php");

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

$file = fopen('storage1v1t.txt', 'w');
fwrite($file, $content);
fclose($file);

shell_exec("gpio -1 mode ". $kamera  ." out");
shell_exec("gpio -1 mode ". $ventil1  ." out");
shell_exec("gpio -1 mode ". $blitz  ." out");

shell_exec("gpio -1 write ". $kamera ." 1");
usleep($w1);
shell_exec("gpio -1 write ". $ventil1 ." 1");
usleep($d1);
shell_exec("gpio -1 write ". $ventil1 ." 0");
usleep($w2);
shell_exec("gpio -1 write ". $blitz ." 1");
usleep($blitzdauer);
shell_exec("gpio -1 write ". $blitz ." 0");
usleep($w3);
shell_exec("gpio -1 write ". $kamera ." 0");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
