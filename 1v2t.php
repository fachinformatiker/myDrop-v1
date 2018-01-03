<?php
$file = "scripts/storage1v2t.txt";
$handle = fopen($file, "r");
$contents = fread($handle, filesize($file));
$content = explode(";", $contents);
fclose($handle);
?>
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
<a href="index.html">Zurück</a>
<br><br>
<form action=scripts/mydrop_1v2t.php class="pure-form pure-form-aligned">
  Belichtung starten
  <br><br>
  <label>Warten (ms) <input name="w1" type="number" value="<?php echo $content[0]; ?>"></label>
  <br><br>
  Tropfen 1 an
  <br><br>
  <label>Dauer (ms) <input name="d1" type="number" value="<?php echo $content[1]; ?>"></label>
  <br><br>
  Tropfen 1 aus
  <br><br>
  <label>Warten (ms) <input name="w2" type="number" value="<?php echo $content[2]; ?>"></label>
  <br><br>
  Tropfen 1 an
  <br><br>
  <label>Dauer (ms) <input name="d2" type="number" value="<?php echo $content[3]; ?>"></label>
  <br><br>
  Tropfen 1 aus
  <br><br>
  <label>Warten (ms) <input name="w3" type="number" value="<?php echo $content[4]; ?>"></label>
  <br><br>
  Blitzen
  <br><br>
  <label>Warten (ms) <input name="w4" type="number" value="<?php echo $content[5]; ?>"></label>
  <br><br>
  Belichtung stoppen
  <br><br><br>
  <button>ausführen</button>
</form>
</center>
</body>
</html>