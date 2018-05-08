<?php
namespace DesignPatterns\Creational\AbstractFactory;
interface DoorFactory{
    public function makeDoor():Door;
    public function fittingDoor():FittingExpert;
}