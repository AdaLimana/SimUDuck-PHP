<?php

namespace SimUDuck\Quack;

/**
 * Description of Quack
 *
 * @author Adair
 */
class Quack implements QuackBehavior
{
    public function quack() 
    {
        echo "\nQuack!\n";
    }
}
