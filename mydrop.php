<?php

$kamera = "17";
$ventil1 = "18";
$blitz = "19";

$x_w1 = $_GET['w1'];
$x_d1 = $_GET['d1'];
$x_w2 = $_GET['w2'];
$x_d2 = $_GET['d2'];
$x_w3 = $_GET['w3'];
$x_w4 = $_GET['w4'];

$w1 = $x_w1 * 1000;
$d1 = $x_d1 * 1000;
$w2 = $x_w2 * 1000;
$d2 = $x_d2 * 1000;
$w3 = $x_w3 * 1000;
$w4 = $x_w4 * 1000;

exec("gpio write ". $kamera ." 1");
usleep($w1);
exec("gpio write ". $ventil1 ." 1");
usleep($d1);
exec("gpio write ". $ventil1 ." 0");
usleep($w2);
exec("gpio write ". $ventil1 ." 1");
usleep($d2);
exec("gpio write ". $ventil1 ." 0");
usleep($w3);
exec("gpio write ". $blitz ." 1");
usleep($w3);
exec("gpio write ". $blitz ." 0");
usleep($w4);
exec("gpio write ". $kamera ." 0");

?>