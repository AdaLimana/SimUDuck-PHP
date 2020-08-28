<?php

namespace SimUDuck;

use SimUDuck\Fly\FlyBehavior;
use SimUDuck\Quack\QuackBehavior;

/**
 * Description of Duck
 *
 * @author Adair
 */
abstract class Duck 
{
    
    private FlyBehavior $flyBehavior;
    
    private QuackBehavior $quackBehavior;
    
    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior) 
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }
    
    public abstract function display();
    
    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }
    
    public function performFly() 
    {
        $this->flyBehavior->fly();
    }
    
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }        
    
}