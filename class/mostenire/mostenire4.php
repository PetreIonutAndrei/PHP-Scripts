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
    switch ($name){
        case 'is_started':
          return $this->is_started;
        case 'gas':
          return $this->gas;
        default:
          echo "Variabila $name nu exista";
    }
  }
}
$car = new Car(20);
$car->start();

echo $car->is_started .'<br>';
echo $car->gas .'<br>';
echo $car->var_care_nu_exista .'<br>';
?>
