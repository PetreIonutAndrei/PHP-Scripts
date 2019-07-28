<?php
 class Car {
   private $is_started = false;
   private $gas = 0;
   function start(){
     if($this->gas > 0){
     $this->is_started = true;
   }else{
     echo "Nu ai benzina";
   }
 }

  function __construct($gas){
    $this->gas = $gas; //gas e a clasei si eu o fac egala cu apelu constructorului
  }

  function __get($name){ // paramatru $name - e numele unei prop din clasa
    echo "Getter apelat pt $name";
    return $this->is_started;
    }
  }
$car = new Car(20);
var_dump($car->is_started); // se apeleaza metoda dar cu toate astea, prin metoda am acces la proprietatea care e private
echo '<br>';
$car->start();
echo '<br>';
var_dump($car->is_started); // se apeleaza metoda dar cu toate astea, prin metoda am acces la proprietatea care e private
echo '<br>';
?>
