<?php
 class Vehicle {
   private $is_started = false;
   private $gas;
   function start(){
     if($this->gas > 0){
     $this->is_started = true;
   }else{
     echo "Nu ai benzina";
   }
 }

  function __construct(int $gas = 0){
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

  class Truck extends Vehicle {
    private $is_trailer_attached = false; // trebuie sa ne asiguram ca remorca e atassat
    //trebuie sa suprascriem functia start
    function start(){
      if ($this->is_trailer_attached){
        parent::start(); //apelam metoda din clasa parinte Vehicle
      }else {
        echo "trailer is not Attached";
      }
    }

    function __get($name){
      if ($name == "is_trailer_attached") return $this->is_trailer_attached;
      else return parent :: __get($name);//chem getterul din parinte
    }

    function attachTrailer(){
      $this->is_trailer_attached = true;
    }
  }

  class Motorcycle extends Vehicle {
    private $is_sidestand_raised = false; //trebuie sa ne asiguram ca cricul e ridicat
    //trebuie sa suprascriem functia start
    function start(){
      if ($this->is_sidestand_raised){
        parent::start(); //apelam metoda din clasa parinte Vehicle
      }else{
        echo "Cannot star. Sidestand is not raised";
      }
    }

    function __get($name){
      if ($name == "is_sidestand_raised") return $this->is_sidestand_raised;
      else return parent :: __get($name);//chem getterul din parinte
    }

    function raiseSideStand(){
      $this->is_sidestand_raised = true;
    }
  }

$truck = new Truck(40);
if ($truck->gas < 0) $truck->gas = 50;
if (!$truck->is_trailer_attached) $truck->attachTrailer();
$truck->start();
var_dump($truck->is_started);
echo "<br>";

$moto = new Motorcycle(0);
if ($moto->gas < 1) $moto->gas = 50;
if (!$moto->is_sidestand_raised) $moto->raiseSideStand();
$moto->start();
var_dump($moto->is_started);
?>
