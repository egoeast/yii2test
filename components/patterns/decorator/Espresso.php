<?php
namespace app\components\patterns\decorator;

abstract class Beverage
{
    protected $description;

    public function getDescription()
    {
        return $this->description;
    }

    public abstract function cost();
}

abstract class ComdimentDecorator extends Beverage
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = "Espresso";
    }

    public function cost()
    {
        return 1.99;
    }
}

class Mocha extends ComdimentDecorator
{
    public function cost()
    {
        return 0.34 + $this->beverage->cost();
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }
}

class Soy extends ComdimentDecorator
{
    public function cost()
    {
        return 0.22 + $this->beverage->cost();
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Soy";
    }

}