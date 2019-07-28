<?php
  echo "Test 2<br>";
    include_once 'include1.php'; //nu da eroare
    require 'include1.php'; //da eroare
    include 'include1.php'; //nu da eroare
    require_once 'include1.php'; //da eroare
//folosim require ca sa nu mai continuam daca avem eroare

 ?>
