<?php
namespace DesignPatterns\Creational\AbstractFactory;
class IronDoorFactory implements DoorFactory{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function fittingDoor(): FittingExpert
    {
       return new Welder();
    }


}