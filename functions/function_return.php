<?php
function modifica($a) {
  $a = $a + 1;
  echo "in functie: $a <br>";
  return $a;
}

  $a = 0;
  $a = modifica($a);
  echo "in afara functiei:$a";
?>
