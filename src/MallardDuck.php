<?php

namespace SimUDuck;

use SimUDuck\Fly\FlyWithWings;
use SimUDuck\Quack\Quack;

/**
 * Description of MallardDuck
 *
 * @author Adair
 */
class MallardDuck extends Duck 
{
    
    public function __construct()
    {
        parent::__construct(new FlyWithWings(), new Quack());
    }
    
    public function display() {
        echo "\nI'm a real Mallard duck!\n";
    }
    
}
