<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
    Unde ati vrea sa va petreceti vacanata:<br>
    <input type="radio" name="destinatinos" value="nord_pole">Polul nord<br>
    <input type="radio" name="destinatinos" value="nord_pole">Jamaica<br>
    <input type="radio" name="destinatinos" value="nord_pole">China<br>
    <input type="submit" value="trimite">
    </form>
    <p>
      <?php
        var_dump($_POST);
       ?>
    </p>

  </body>
</html>
