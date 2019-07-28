<?php

/**
 *
 * @author Ionut
 */
interface Robot {
    public function start(): void;
    
    public function charge(int $level): void; //parametru cat sa fie incarcat
}
