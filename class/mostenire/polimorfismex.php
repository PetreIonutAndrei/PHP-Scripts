<?php
/*• Polimorfismul în Programarea Orientată pe Obiecte înseamnă că metoda
dintr-o clasă se va comporta diferit de metoda cu același nume din altă
clasă, ambele clase având un părinte comun*/
/*De exemplu, dacă spunem că câine și pasăre sunt subclasele clasei animal,
atunci amândouă au aceeași metodă: se deplasează. Aceste două metode,
deși au același nume, ar avea un rezultat complet diferit, deoarece pasărea
zboară, iar câinele merge*/
/*Pentru a implementa polimorfismul clasei, trebuie să cunoaștem noțiunea
de suprascriere (override)*/
/*Dacă vrem să schimbăm comportamentul proprietăților și metodelor
moștenite, putem s-o facem în clasa ”copil”, printr-o tehnică numită
suprascriere (overriding)
• Dacă vrem să ne asigurăm că o metodă din clasa noastră nu poate fi
suprascrisă, atunci prefixăm cuvântul cheie final la definiția metodei
• Dacă vrem să ne asigurăm că o clasă în întregime nu poate fi suprascrisă,
prefixăm final la definiția clasei */

 ?>
 <?php
   class A {
     function example() {
       echo "I am A::example() and provide basic functionality.<br/>\n";
     }
   }
  class B extends A {
    function example() {
      echo "I am B::example() and provide additional functionality.<br/>\n";
      parent::example();
    }
  }

$exA = new A();
$exA->example();
var_dump ($exA);
echo "<br>";
$exB = new B();
$exB->example();
var_dump ($exB);
?>
