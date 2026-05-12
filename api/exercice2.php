<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function afficherTriangle($a) {
  for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < $a - $i ; $j++) {
      echo " ";
    }
    for ($k = 0; $k <= $i; $k++) {
      echo "*";
    }
    echo "<br>";
  }
}

afficherTriangle(5);
?>

<br><br><br>

<?php
$hauteur = 5;
for ($i = 0; $i < $hauteur; $i++) {
  for ($j = 0; $j < $hauteur-$i; $j++) {
    
    echo " ";
  }
  for ($k = 0; $k <= $i; $k++) {
    echo "*";
    
  }
  echo "<br>";
}
?>

</body>
</html>

</body>
</html>