<?php
//Atât proprietățile, cât și metodele, pot fi statice
//• Un membru static corespunde clasei, în loc să corespundă unei instanțe
//•Din acest motiv, pentru a apela o proprietate sau o metodă statică, nu
//avem nevoie de o instanță a clasei
//• Spre deosebire de membrii dinamici, cei statici se apelează folosind ::
  MyClass::static_method();
  MyClass::$static_property;
//• Dacă avem nevoie să ne referim la clasa curentă într-un context static,
//atunci folosim self în loc de $this
 ?>
