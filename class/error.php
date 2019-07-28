<?php

    error_reporting(0);

    class A {}

    function my_error_handler(int $errno, string $errstr ){
      echo "Eroare: ".$errstr."<br>";
      die();
    }

    set_error_handler('my_error_handler');

    echo "muiesteaua<br>";
  $a = ["ceva","altceva"];
  echo $a[2];

  echo "muiesteaua<br>";

  $a =2/0;
  echo "muiesteaua";

  echo (new A());

  blabla ();

  echo "muiesteaua";
 ?>
