<?php
namespace app\components\patterns\strategy;
/**
Реализация паттерна стратегия
 */
interface FlyBehavior
{
    public function fly();
}

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        return "I'm flying!1!!";
    }
}

abstract class Duck
{
    private $flyBehavior;

}