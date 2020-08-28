<?php

namespace SimUDuck\Fly;

/**
 * Description of FlyNoWay
 *
 * @author imortal
 */
class FlyNoWay implements FlyBehavior
{
    public function fly() {
        echo "\nI can't fly!\n";
    }
}