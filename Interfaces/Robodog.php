<?php
/**
 * Description of Robodog
 *
 * @author Ionut
 */
class Robodog implements Animal, Robot, Pet  {
    private $batteryLevel = 100;
    public function charge (int $level) : void {
        $this->batteryLevel  = $level;
    }
    public function play(): void {
        echo 'Running' . PHP_EOL;
        $this->batteryLevel -= 10;
    }
    
    public function speak(): void {
        echo 'Ham'.PHP_EOL;
    }
    
    public function start(): void {
        echo 'Starting robodog' . PHP_EOL;
    }
}
