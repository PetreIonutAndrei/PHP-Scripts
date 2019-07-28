<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body {font-family: monospace;}
      .ac { color: green; }
      .glob { color: red; }
    </style>
  </head>
  <body>
    <?php
        $w= 10;
        for ($k=0; $k<4; $k++)
          for ($i=7*$k; $i<$w+7*$k; $i++) {
            echo '<center>';
            for ($j=0; $j<2*$i-1; $j++) {
              if (random_int(0,10)>1) echo '<span class="ac">+</span>';
              else echo '<span class="glob">0</span>';
            }
            echo '</center>';
          }
     ?>
  </body>
</html>
