<?php
    // se folosesc pentru a interactiona cu proprietati la care nu avem acces
      function __get($name){ //is utilized for reading data from inaccessible properties.
        switch ($name){
          case 'is_started':
            return $this->is_started;
          case 'gas':
            return $this->gas;
          default:
            return null;
        }
      }

      function __set($name,$value){ // is run when writing data to inaccessible properties.
        switch ($name){
          case 'is_started':
             $this->is_started = $value;
             break;
          case 'gas':
             $this->gas = $value;
             break;
        }
      }
 ?>
//The $name argument is the name of the property being interacted with.
//The __set() method's $value argument specifies the value the $name'ed property should be set to.
// !!! php prin functia set/gett stie la ce proprietate ne referim atunci cand apelam (gen: $car-> gas)
