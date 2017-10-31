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
        return "I'm flying with wings!1!!";
    }
}

class FlyWithRocket implements iFlyBehavior
{
    public function fly()
    {
        return "I'm flying with rocket!1!!";
    }
}

interface iQuackBehavior
{
    public function quack();
}

class Quack implements iQuackBehavior
{
    public function quack()
    {
        return "Quack";
    }
}

class MuteQuack implements iQuackBehavior
{
    public function quack()
    {
        return "<< Silence >>";
    }
}
abstract class Duck
{
    private $flyBehavior;
    private $quackBehavior;
    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function setFlyBehavior(iFlyBehavior $behavior)
    {
        $this->flyBehavior = $behavior;
    }
    public function setQuackBehavior(iQuackBehavior $behavior)
    {
        $this->quackBehavior = $behavior;
    }
}

class MallarDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithRocket());
        $this->setQuackBehavior(new Quack());
    }
}




