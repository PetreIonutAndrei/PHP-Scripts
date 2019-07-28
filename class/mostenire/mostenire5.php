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

  function __set($name,$value){
    switch ($name){
      case 'is_started': //proprietate ASTA AR TREBUI STEARSA PT CA NU VREM SA POATA FI MODIFICATA
        $this->is_started = $value;
        break;
      case 'gas': //proprietate
        if(is_numeric($value)) $this->gas = $value;
        else throw new Exception ("gas trebuie sa fie numeric");
        break;
    }
  }
    function __toString(){ //returneaza neaparat un string
      return "Class=Car{\$is_started=$this->is_started,\$gas=$this->gas}";
    }
}

//polimorfism inseamna sa avem o metoda intr-o clasa care sa se comporte difertit fata de metoda de acelasi nume din alta clasa pt. asta facem suprascriere
$car = new Car(20);
$car->start();
$car->is_started = true;  //$name = is_started si $value = true
$car->gas = 20; // daca e numeric e ok

echo $car->is_started .'<br>';
echo $car->gas .'<br>';
echo $car->var_care_nu_exista .'<br>';
echo $car; // echo returneaza 1 in loc de true
?>
