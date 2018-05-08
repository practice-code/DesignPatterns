<?php
namespace DesignPatterns\Creational\AbstractFactory;

class Welder implements FittingExpert{
    public function getDescription()
    {
        echo 'I am fitting the iron door only';
    }
}