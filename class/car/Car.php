<?php
  class Car { // de preferat numele clasei cu litera mare
    private $total_fuel; //public TOATE ASTEA SUNT PROPRIETATI
    private $crt_fuel; //public current fuel
    private $consumption; //public
    public $km;
    static private $nr_roti = 4;

    static function nr_roti(){
      return self::$nr_roti;
    }

    function fill($quantity) { //metoda 1
      $this->crt_fuel += $quantity;//pt a atribui clasa unei metode folosim $this
    }

    function go($distance) { //metoda 2
      $needed = $this->consumption/100 * $distance;
      if ($this->crt_fuel > $needed ){
      $this ->km += $distance;
      $this->crt_fuel -= $needed; //pt a atribui clasa unei metode folosim $this
    } else {
      return "Nu ai suficienta benzina pentru $distance km! <br>";
    }
  }
    function fuel_left() { //metoda 3 Nu ii dam parametru pentru ca el trebuie sa ne zica
      return $this->crt_fuel * 100 / $this->total_fuel; // ca sa afiseje procentaj
    }
    function odometer(){
      return $this->km;
    }


//constructorul e o metoda responsabila pentru initializarea instantei noastre
    function __construct($total_fuel, $crt_fuel, $consumption) {
      $this->total_fuel = $total_fuel; //pt a atribui clasa unei metode folosim $this; total fuel fara dolar e defapt proprietatea clasei
      $this->crt_fuel = $crt_fuel; //pt a atribui clasa unei metode folosim $this
      $this->consumption = $consumption; //pt a atribui clasa unei metode folosim $this
      $this->km = 0;
    }
}
//INITIALIZARE
//  $car = new Car();
//  $car->total_fuel = 50; //l
//  $car->crt_fuel = 25; //l
//  $car->consumption = 10; // l/100km
