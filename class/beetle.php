<?php
  class Beetle {
    public $prod_year; //proprietetile statice (aplicate clasei) se definesc cu public,private, protect
    public $km; // proprietetile dinamice se aplica obiectului
    public $color;
  }

  $beetle1 = new Beetle(); //obiectul 1
  $beetle1 ->prod_year = 1970; // ii se da proprietatii o valoare
  $beetle1 ->km = 50000;
  $beetle1 ->color= 'red';
  var_dump($beetle1);
  echo '<br>';

  $beetle2 = new Beetle(); //obiectul 2
  $beetle2 ->prod_year = 1975;
  $beetle2 ->km = 100000;
  $beetle2 ->color= 'yellow';
  var_dump($beetle2);
 ?>
