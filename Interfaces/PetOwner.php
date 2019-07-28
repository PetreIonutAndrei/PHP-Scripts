<?php
/**
 * Description of PetOwner
 *
 * @author Ionut
 */
class PetOwner {
    private $pets = [];
    
    public function buyPet(Pet $pet){
        $this->pets[] = $pet;
    }
    
    public function playWithPets(){
        foreach($this->pets as $pet){
            $pet->play(); //apelam metoda play pt fiecare pet din array
        }
    }
}
