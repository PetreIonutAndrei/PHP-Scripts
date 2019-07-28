<!DOCTYPE html>
<html lang=" " dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $pass = '';
      if (isset($_POST['pass'])) $pass = $_POST['pass'];
     ?>
        <form method='post'>
          <input type="text" name="pass" value="<?=$pass?>" placeholder="type your password">
          <input type="submit" value="Trimite">
        </form>

        <?php
          /*
          daca contine anumite grupe de caractere:
          -litere mici
          -litere mari
          -caractere speciale
          -cifre
          -lungime
          */
          $punctaj = 0;

          function findstring($pass,$punctaj,$search){

              $found = 0;

              for ($i=0; $i < strlen($search); $i++) {
                if (strpos($pass,$search[$i])) $found ++;
                if ($found > 1) break;
                /*strlen - Get string length*/
                /*strpos - Find the position of the first occurrence of a substring in a string*/
              }
            return $punctaj + $found*10;
          }
          if((strtolower($pass) != $pass) && (strtoupper($pass) != $pass)) $punctaj += 20;
          /*strtolower - Make a string lowercase*/
          $punctaj = findstring($pass, $punctaj, '1234567890');
          $punctaj = findstring($pass, $punctaj, '!@#$%^&*(\':_;><?');
          /*se face apel la functie de 2 ori*/
          if (strlen($pass) > 4) $punctaj += 10;
          if (strlen($pass) > 6) $punctaj += 10;
          if (strlen($pass) > 8) $punctaj += 10;
          if (strlen($pass) > 12) $punctaj += 10;

          echo $punctaj;
         ?>


  </body>
</html>
