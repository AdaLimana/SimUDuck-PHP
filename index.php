<?php

require 'vendor/autoload.php';

use SimUDuck\Fly\FlyNoWay;
use SimUDuck\MallardDuck;
use SimUDuck\Quack\MuteQuack;

$duck = new MallardDuck();

$duck->display();
$duck->performFly();
$duck->performQuack();

$duck->setFlyBehavior(new FlyNoWay());
$duck->setQuackBehavior(new MuteQuack());
$duck->display();
$duck->performFly();
$duck->performQuack();