<?php
//fisier in care se instantiaza clasele
spl_autoload_register(function($class){
require_once $class . '.php';
});
$croco = new Crocodile();

$mia = new Cat();

$robi = new Robodog();


$greg = new PetOwner();
$greg->buyPet($mia);
$greg->buyPet($robi);

$greg->playWithPets();