<?php
/*  $sum = 0;
    for($i=0; $i<= $_GET['n']; $i++){
      $sum += $i;
    }
    echo $sum;*/

    function sum($n){
      if ($n==0) return 0;
      else return  $n + sum($n - 1);
       /*n - 1 inseamna ca se va opri*/

    }
    echo sum($_GET['n']);

    /*  $rest = 1;
        for($i=0; $i<= $_GET['n']; $i++){
          $rest *= $_GET['k'];
        }
        echo $rest;*/

      /*  function power($k,$n){
          echo "$k, $n <br>";
          if ($n==1) return $k;
          else {
            $tmp =  power($k,floor($n/2));
            if ($n % 2 == 0 ) return $tmp * $tmp;
            else return $tmp * $tmp * $k;
          /* de verificat fct floor, ceil , round*/

      /*    }
        }
        echo power($_GET['k'],$_GET['n']); */
 ?>
