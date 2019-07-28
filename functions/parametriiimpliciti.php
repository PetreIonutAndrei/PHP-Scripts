<?php
function math($a, $b, $op = '-') {
  switch ($op) {
    case '+': return $a+$b;
    case '-': return $a-$b;
    }
  }
echo math(3,2).'<br>';
echo math(3,2,'+');
 ?>
