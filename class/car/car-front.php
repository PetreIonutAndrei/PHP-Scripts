<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function my_autoloader($class){ //include mereu fiecare fisier carecontine clasa pe care o utilizam
    echo "attempting to load $class.php<br>";
    require $class . '.php'; //sau require 'car.php;'
}
spl_autoload_register('my_autoloader'); //my_autoloader e o metoda

    session_start();  // dupa initilizare vreu sa-i spun sa mearga kilometrii sau sa incarce benzina
                    // vreau sa o fac r=sa traiasca intre requesturi pt ca html e stateless
    if (!isset($_SESSION['car'])) {
      $car = new Car(50,25,10); //apelare la metoda constructor

    } else {

      $car = $_SESSION['car'];

    }
    if(isset($_POST['distance'])){

       //cand intruu prima oara intr-o pagina fac un request de tip get deci nu o sa am nimic in $_POST
       //deci prima oara cand intruu in pagina nu e setata
       //daca nu as face if cu isset primesc eroare de undefine index ca incerc sa folosesc o valuare care nu exista in Array
       //isset verifica daca o variabila e setata sau daca un element dintr-un array exista
      echo $car->go($_POST['distance']);
      echo "Benzina ramasa: {$car->fuel_left()}% <br>";
      echo "kilometrii parcursi :{$car->odometer()} km<br>";
      //la array.uri asociative si obiecte daca vrem sa le folosim intre "" cu echo trebuie sa punem {}
      $_SESSION['car'] = $car;

    }
    echo Car::nr_roti(); //codul asta php puteam sa-l leg cu html-ul daca scriam in form action=si fiserul php
    ?>
    <form  method="post">
      Cat vrei sa mergi cu masina?
      <input type"text" name="distance">
      <input type="submit" value="go">
    </form>
  </body>
</html>
