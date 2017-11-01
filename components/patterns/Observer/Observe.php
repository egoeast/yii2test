<?php
namespace app\components\patterns\observer;
/*
Реализация раттерна наблюдатель на примере меостанции.
Имеется метеостанция, которая отправляет данные на несколько дисплеев
 */

interface iSubject
{
    public function registerObserver(iObserver $observer);
    public function removeObserver(iObserver $observer);
    public function notifyObserver(iObserver $observer);
}

interface iObserver
{
    public function update($temp, $humidity, $pressure);
}

interface iDisplay
{
    public function display();
}

class WeatherData implements iSubject
{
    private $observers = array();
    private $temperature;
    private $humidity;
    private $pressure;
    public function registerObserver(iObserver $observer)
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver(iObserver $observer)
    {
        return array_search($this->observers, $observer);
    }

    public function notifyObserver(iObserver $observer)
    {
        // TODO: Implement notifyObserver() method.
    }
}

