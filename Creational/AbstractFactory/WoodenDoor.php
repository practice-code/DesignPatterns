<?php
namespace DesignPatterns\Creational\AbstractFactory;
class WoodenDoor implements Door{
    public function getDescription()
    {
        echo 'this is woodend door';
    }

}