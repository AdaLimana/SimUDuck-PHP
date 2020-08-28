<?php

namespace SimUDuck\Quack;

/**
 * Description of MuteQuack
 *
 * @author Adair
 */
class MuteQuack implements QuackBehavior 
{
    public function quack() 
    {
        echo "\n<< Silence >>\n";
    }
}
