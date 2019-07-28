 <?php
  class Vehicle {
    public $is_started = false; //incapsulare - e false pt ca initial vehiculul este oprit
    public $gas = 0; //incapsulare

    function start(){
      if($this->gas = 0); // nu inteleg de ce gas = 0
        $this->is_started = true;
    }
    function __construct($gas){ //constructorul e o metoda responsabila pentru initializarea instantei noastre
      $this->gas = $gas; //instanta ( se refera la o proprietate a clasei)
    }
    function __set($name,$value){ // se folosesc pentru a interactiona cu proprietati la care nu avem acces
      switch ($name){
        case 'gas':   // daca aveam in loc de case, return numai trebuia sa pun break
        if(is_numeric($value)) $this->gas = $value;
        break; // la return nu se pune break!!
        case new Exception("Gas tre sa fie numeric"); //arunca o eroare
        break;
      }
    }
    function _toString(){ // printeaza un sting pe care il vreau eu gen ca o eroare
      return "Class=Car{\$is_started=$this->is_started,\gas=$this->gas}";
    }
  }
    class Truck extends Vehicle {
      private $is_trailer_attached = false;

      function start(){
        if ($this->is_trailer_attached){
          parent::start(); //proprietate statica
        }else {
          echo " Cannot start. Trailer is not attached.";
        }
      }
      function __get($name){
        if($name == "is_trailer_attached") return $this->$is_trailer_attached;
        else return parent::__get($name);
      }

      function __set($name,$value){
        echo "";
      }

      function attachTrailer(){
        $this->is_trailer_attached = true;
      }

    }
    class Motorcycle extends Vehicle{
      private $is_sidestand_raised = false;

      function start();
      if($this->is_sidestand_raised){
      parent::start();
    }else "Cannot start.Sidestand is not raised";
  }

    $truck = new Truck(0);
      if ($truck->gas < 1) $truck->gas = 50;
      if ($truck->is_trailer_attached) $truck->attachTrailer();
    $truck->start();
    var_dump($truck->is_trailer_attached);
    var_dump($truck->gas);
?>
