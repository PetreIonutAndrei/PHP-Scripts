<?php
function modifica(&$a) {
  $a = $a + 1;
  echo "in functie: $a <br>";
}

$a = 0;
modifica($a);
echo "in afara functiei:$a";
?>
