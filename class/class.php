<?php
  class Car{ // de  preferat clasa sa se numeasca cu litera mare
    public $engine_started = false;

    function start() {
        $this->engine_started = true;
    }
    function stop() {
        $this->engine_started = false;
  }

    function isStarted(){
      return $this->engine_started;
    }
}
  $car = new Car ();
  var_dump($car->isStarted()); //apelarea metodei
  echo '<br>';
  $car->start();
  var_dump($car->isStarted()); //apelarea metodei
  echo '<br>';
  $car->stop();
  var_dump($car->isStarted()); //apelarea metodei
  echo '<br>';
 ?>
