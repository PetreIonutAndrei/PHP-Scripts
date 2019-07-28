<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $dest_list = [
      'polul nord'=> 'Polul nord',
      'jamaica'=> 'Jamaica',
      'china'=> 'China'
    ];

      if (isset ($_POST['destinations'])) $dest = $_POST['destinations'];
      else $dest = [];

     ?>
    <form method="post" action="select.php">
    Unde ati vrea sa va petreceti vacanata:<br>
        <select name="destinations[]" multiple>
          <?php
            foreach ($dest_list as $key => $value) {
              ?>
              <option
                value="<?$key?>"
                <?= in_array($key,$dest) ? 'selected' : '' ?>
                >
                <?= $value ?>
              </option>
            <?php
            }
           ?>
        </select>
    <input type="submit" value="trimite">
    </form>
    <p>
      <?php
        var_dump($_POST);
       ?>
    </p>

  </body>
</html>
