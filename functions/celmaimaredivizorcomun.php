<?php
  function magic(int $p,int $q) {
    return ($q == 0) ? $p : magic($q, $p % $q);
}

echo magic (35,15) . '<br>';
echo magic (8,16)  . '<br>';
echo magic (43,56);

/* cel mai mare divizor comun: 35   7*5 */
/* functia se apeleaza pe sine :)) adica recursivitate*/
 ?>
