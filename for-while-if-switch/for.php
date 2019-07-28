<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $n = $_GET['n'];
    $sum = 0;
      for ($i=0; $i <= $n; $i++) $sum += $i;
      echo $sum;
     ?>

  </body>
</html>
