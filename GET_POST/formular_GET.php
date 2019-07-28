<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form>
      <input id="myinput" type="text" name="myinput" value="default">
      <input type="submit" value="trimite">
    </form>
       <?php
          if (isset($_GET['myinput']))
            echo $_GET['myinput'];
        ?>
  </body>
</html>
