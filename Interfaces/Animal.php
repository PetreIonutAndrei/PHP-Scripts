<?php

/**
 * Description of Animal
 *
 * @author Ionut
 */
//diferenta intre clase abstracte si interfete este ca interfetele au doar metode abstracte(adica metode care nu sunt implementate inca, le vom utiliza ulterior in clase concrete)
interface Animal {
    public function speak(): void; // returneaza void (sintaza de php7)    
}
