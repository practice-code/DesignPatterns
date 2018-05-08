<?php
namespace DesignPatterns\Creational\AbstractFactory;
class WoodenDoorFactory implements DoorFactory{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function fittingDoor(): FittingExpert
    {
        return new Carpenter();
    }


}