<?php
namespace DesignPatterns\Creational\AbstractFactory;

class IronDoor implements Door{
    public function getDescription()
    {
        echo 'i am iron door';
    }
}