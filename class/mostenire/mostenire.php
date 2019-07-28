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
  function getIsStarted(){ //functia asta poarta denumirea de getter ca imi aduce valuarea variabilei si se foloseste cuv cheie get
    return $this->is_started;
  }
}
$car = new Car(20);
var_dump($car->getIsStarted());
echo '<br>';
$car->start();
echo '<br>';
var_dump($car->getIsStarted());
echo '<br>';
?>
