<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bine ati venit</title>
  </head>
  <body>
    <h1> Bine ati venit </h1>
    <?php
    if (is_numeric($_GET['a']) && is_numeric($_GET['b']))
      echo $_GET['a'] + $_GET['b'];
    else
      echo "Cel putin un parametru nu e numar";
    ?>
  </body>
</html>
