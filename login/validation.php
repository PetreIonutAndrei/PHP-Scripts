<?php
  function validate_email(){
    if (isset($_POST['email'])) {
      $email = htmlspecialchars($_POST['email']);
      if (!strpos($email, '@') || !strpos($email,'.'))
      echo "<span class='warm'>Introduceti un email valid</span><br>";
  }
 }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style type="text/css">
      .warm {
        color: red;
      }
    </style>

  </head>
  <body>
    <form method="post">
      <input type="text" name="email"><br>
      <?php validate_email () ?>
      <input type="submit" value="Trimite">
    </form>
  </body>
</html>
