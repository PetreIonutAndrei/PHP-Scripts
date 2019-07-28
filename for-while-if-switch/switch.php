<?php
  $d = date('N');
  switch($d) {
    case 1: echo "luni"; break;
    case 2: echo "marti"; break;
    case 3: echo "Miercuri";break;
    case 4: echo "Joi"; break;
    case 5: echo "Vineri"; break;
    case 6: echo "sambata"; break;
    case 7: echo "duminica"; break;
    default: echo "sa stricat calendarul";
  }
 ?>
