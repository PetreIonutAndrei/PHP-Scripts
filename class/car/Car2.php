<?php
function my_autoloader($class){ //include mereu fiecare fisier carecontine clasa pe care o utilizam
require $class . '.php';
}
spl_autoload_register('my_autoloader');

session_start();
if (!isset($_SESSION['car'])) {
  $car = new Car(50,25,10);

} else {

  $car = $_SESSION['car'];

}
if(isset($_POST['distance'])){
  echo $car->go($_POST['distance']);
  echo "Benzina ramasa: {$car->fuel_left()}%<br>";
  echo "kilometrii parcursi :{$car->odometer()} km<br>";
  $_SESSION['car'] = $car;
}
echo Car::$nr_roti;
?>
