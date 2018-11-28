<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

<?php
      $temperatura = array(4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21);


      $vidutine = array_sum($temperatura) / count($temperatura);
        echo "Vidutinė mėnesio temperatūra - ". round($vidutine);

?>

<?php
      rsort($temperatura);
      foreach ($temperatura as $key => $val);
        // echo "$key = $val\n";

      $nesikartoti = array_unique($temperatura);

      print_r (array_slice($nesikartoti, 0, 5));
      print_r (array_slice($nesikartoti, -5, 5));

?>

  </body>
</html>
