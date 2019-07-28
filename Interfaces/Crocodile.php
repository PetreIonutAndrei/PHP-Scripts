<?php

/**
 * Description of newPHPClass
 *
 * @author Ionut
 */
class Crocodile implements Animal { //implementeaza animalul, orice animal trebuie sa contina metoda din animal
    
    public function speak(): void {
        echo 'Hrrrr' . PHP_EOL;
    }
}
