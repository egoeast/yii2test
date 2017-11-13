<?php
namespace app\components\patterns\observer;
/*
Реализация раттерна наблюдатель на примере меостанции.
Имеется метеостанция, которая отправляет данные на несколько дисплеев.
 */

interface SubjectInterface
{
    public function registerObserver(ObserverInterface $observer);
    public function removeObserver(ObserverInterface $observer);
    public function notifyObserver(ObserverInterface $observer);
}

interface ObserverInterface
{
    public function update($temp, $humidity, $pressure);
}

interface DisplayInterface
{
    public function display();
}

class WeatherData implements SubjectInterface
{
    private $observers = array();
    private $temperature;
    private $humidity;
    private $pressure;
    public function registerObserver(ObserverInterface $observer)
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver(ObserverInterface $observer)
    {
        //return array_search($this->observers, $observer);
    }

    public function notifyObserver(ObserverInterface $observer)
    {
        // TODO: Implement notifyObserver() method.
    }
}

class DisplayTemp implements ObserverInterface, DisplayInterface
{
    public function update($temp, $humidity, $pressure)
    {
        // TODO: Implement update() method.
    }

    public function display()
    {
        // TODO: Implement display() method.
    }
}

