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
