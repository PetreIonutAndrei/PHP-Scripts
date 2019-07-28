<?php




/**
 * Description of Cat
 *
 * @author Ionut
 */
class Cat implements Pet, Animal {
    public function play(): void{
        echo 'Break'. PHP_EOL;
    }
    public function speak(): void {
        echo 'Miau' . PHP_EOL;
    }
}
