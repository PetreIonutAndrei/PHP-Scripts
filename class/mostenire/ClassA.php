<?php
    class A {
      protected $prop1 = 5; //var = public
//private -  nu permite acces la variabila din afara clasei!
//o facem private cand nu vrem sa fie accesibila din afara clasei
//protected - permite accesul la proprietati si din clasele extinse dar nu din alta clasa
      function met1(){
        echo "Metoda din clasa A<br>";
      }
    }

    class B extends A { // o clasa poate fi exdinsa doar de o singura clasa
      function met2(){
        echo "Metoda din clasa B<br>";
      }
    }

    class C extends B {
      function met2(){
      var_dump($this->prop1);
      $this->met1();
    }
  }
  $c = new C(); // mai intai trebuie sa creez un obiect pt a-i outea acessa metodele
  $c->met2();
//$a = new A();
//$b = new B();
//$b->met1();
//$b->met2();
//$a->met2(); Fatal eror

?>
