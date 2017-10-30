<?php
namespace app\components\patterns\strategy;
/**
Реализация паттерна стратегия
 */
interface iFlyBehavior
{
    public function fly();
}

class FlyWithWings implements iFlyBehavior
{
    public function fly()
    {
        //echo "I'm flying with wings!1!!";
        return "I'm flying with wings!1!!";
    }
}

class FlyWithRocket implements iFlyBehavior
{
    public function fly()
    {
        //echo "I'm flying with rocket!1!!";
        return "I'm flying with rocket!1!!";
    }
}

abstract class Duck
{
    private $flyBehavior;
    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function setFlyBehavior(iFlyBehavior $behavior)
    {
        $this->flyBehavior = $behavior;
    }
}

class MallarDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithRocket());
    }
}




