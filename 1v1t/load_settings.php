<html>
<head>
 <!-- HTML5 -->
<meta charset="utf-8">
 <!-- HTML 4.x -->
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>
myDrop
</title>
</head>
<body>
<center>
<br><br>
<a href="../1v1t.html">Zurück</a>
<br><br>
<?php
$file = "settings.txt";
$handle = fopen($file, "r");
$contents = fread($handle, filesize($file));
$array = explode("\n", $contents);
fclose($handle);
$number = 0;
echo "<form action='load_line.php' method='post' class='pure-form pure-form-aligned'> <label>Werte:";
echo '<br><br><select name="werte">'; 
foreach($array as $wert){ 
  echo '<option value="' . $number++ . '">' . $wert . '</option>';
} 
echo'</select>';
echo "<br><br><button type='submit'>laden</button>";
?>
</center>
</body>
</html>