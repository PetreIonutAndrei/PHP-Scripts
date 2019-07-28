<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
          <?php
            for ($i=0; $i<25; $i++) echo 'Nume cursant'. $i .'<input type="text" name=" nume cursant[]"><br>';
           ?>

      <input id="myinput" type="text" name="myinput" value="default">
      <input type="submit" value="trimite">
    </form>
    <p>
       <?php
        //  if (isset($_POST['myinput']))
        //    echo $_POST['myinput'];
          var_dump($_POST);
        ?>
    </p>
  </body>
</html>
