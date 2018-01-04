<?php
$row_number = $_POST['werte'];
$file_out = file("settings.txt");

unset($file_out[$row_number]);

file_put_contents("settings.txt", implode("", $file_out));

header('Location: ../1v1t.html');
?>